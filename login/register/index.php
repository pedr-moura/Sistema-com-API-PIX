<?php 
session_start();

require "/storage/ssd2/294/22002294/public_html/connectionDataBase/config.php";
include_once "/storage/ssd2/294/22002294/public_html/function/sorteioFotos.php";

function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomCharacter = $characters[rand(0, $charactersLength - 1)];

        while (strpos($randomString, $randomCharacter) !== false) {
            $randomCharacter = $characters[rand(0, $charactersLength - 1)];
        }

        $randomString .= $randomCharacter;
    }

    return $randomString;
}

$randomString = generateRandomString();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $countPays = 0;
    $dateRegister = date('d/m/Y');
    $pixkey = $_POST['pixkey'];
    $theme = '0';
    $humor = '0';
    
    $apikey = $randomString;

$sqlConsultEmail = "SELECT * FROM users WHERE email = ?";
$stmtConsultEmail = $conn->prepare($sqlConsultEmail);
$stmtConsultEmail->bind_param("s", $email);
$stmtConsultEmail->execute();
$resultConsultEmail = $stmtConsultEmail->get_result();

$sqlConsultPixKey = "SELECT * FROM users WHERE pix_key = ?";
$stmtConsultPixKey = $conn->prepare($sqlConsultPixKey);
$stmtConsultPixKey->bind_param("s", $pixkey);
$stmtConsultPixKey->execute();
$resultConsultPixKey = $stmtConsultPixKey->get_result();

if ($resultConsultEmail->num_rows > 0) {
    header('Location: https://patopay.000webhostapp.com/login/');
    exit;
}

if ($resultConsultPixKey->num_rows > 0) {
    header('Location: https://patopay.000webhostapp.com/login/');
    exit; 
}

$result = mysqli_query($conn, "INSERT INTO users (email, name, password, count_pays, date_register, pix_key, theme, humor, api_key) VALUES ('$email', '$name', '$password', '$countPays', '$dateRegister', '$pixkey', '$theme', '$humor', '$apikey')");

if ($result) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: https://patopay.000webhostapp.com/home/');
} else {
    echo "Ocorreu um erro ao inserir os dados no banco de dados.";
}
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        html, body {
    overflow-x: hidden;
    }
            body{
            background-color: #77DD77;
            font-family: "Inter", sans-serif;
        }
        .obj1 {
    z-index: -1;
    width: 100%;
    background: white;
    color: white;
    border-bottom-left-radius: 210px;
    height: 30%;
    position: absolute;
    right: 0px;
    top: 0px;
    -webkit-box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
    -moz-box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
    box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
        }
        form {
    width: 100%;
    position: absolute;
    bottom: 13%;
    z-index: 1;
    left: 50%;
    transform: translate(-50%, 0px);
        }
        .title {
    text-shadow: 0px 0px 11px rgba(246, 216, 98, 0.32);
    color: #F6D862;
    font-weight: 700;
    font-size: 7vh;
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0px);
    top: 10%;
}
img {
    max-width: 190px;
    width: 30vh;
    z-index: 1;
    position: absolute;
    right: 1vw;
    top: 14%;
}
.desc {
    display:none;
    z-index: 2;
    color: #F3F3F3;
    top: 30%;
    position: absolute;
    font-size: 25px;
    width: 90%;
    left: 50%;
    transform: translate(-50%, 0px);
}
.desc p{
    display:none;
    margin-top: -30px;
}
.input {
    font-weight: bold;
    text-align: center;
    font-size: 20px;
    width: 100%;
    max-width: 260px;
    height: 24px;
    padding: 12px;
    border-radius: 30px;
    border: 1.5px solid lightgrey;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
    left: 50%;
    position: relative;
    transform: translate(-50%, 0px);
}

.input:hover {
  border: 2px solid lightgrey;
  box-shadow: 0px 0px 20px -17px;
}

.input:focus {
  border: 2px solid grey;
}

.action {
    width: 240px;
    position: relative;
    left: 50%;
    transform: translate(-50%,0%);
    display: flex;
    justify-content: center;
    align-items: center;
}
.action input {
    border-radius: 30px;
    background: none;
    border: 2px solid #F3F3F3;
    font-size: 20px;
    color: #F3F3F3;
    padding-top: 5px;
    padding-right: 20px;
    padding-bottom: 5px;
    padding-left: 20px;
    font-weight: bold;
}
    </style>
</head>
<body>
<div class="obj1">.</div>

<div class="title">
    PatoPay
</div>
<div class="desc">
    <h1>Registre-se,</h1>
    <p>para aproveitar o que estamos preparando.</p>
</div>
<img src="<?php echo $img?>" alt="">

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="Nome" name="name" class="input" required><br><br>
        <input type="text" placeholder="Email" name="email" class="input" required><br><br>
        <input type="password" name="password" id="" placeholder="Senha" class="input" required><br><br>
        <input type="text" name="pixkey" id="" placeholder="Sua chave PIX" class="input" required><br><br>
        <div class="action">
        <input type="submit" name="submit" value="Registrar">
        </div>

    </form>
</body>
</html>