
<?php 
session_start();

require "/xampp/htdocs/PatoPay/connectionDataBase/config.php";
include_once "/xampp/htdocs/patopay/function/sorteioFotos.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $countPays = 0;
    $dateRegister = date('d/m/Y');
    $pixkey = $_POST['pixkey'];

    $sqlConsult = "SELECT * FROM users WHERE email = ?";
    $stmtConsult = $conn->prepare($sqlConsult);
    
    $stmtConsult->bind_param("s", $email);
    $stmtConsult->execute();
    
    $resultConsult = $stmtConsult->get_result();

    if ($resultConsult->num_rows > 0) {
         header('Location: http://localhost/Patopay/login/');
    }else{
        $result = mysqli_query($conn, "INSERT INTO users(email,name,password,count_pays,date_register,pix_key) VALUES ('$email','$name','$password','$countPays','$dateRegister','$pixkey')");

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
         header('Location: http://localhost/Patopay/home/');
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
    margin-top: -30px;
}
.input {
    font-weight: bold;
    text-align: center;
    font-size: 20px;
    width: 100%;
    max-width: 260px;
    height: 23px;
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