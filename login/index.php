<!-- http://localhost/Patopay/ -->
<?php 
    session_start();
    include_once "/xampp/htdocs/patopay/function/sorteioFotos.php";
    
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
        include_once "/xampp/htdocs/PatoPay/connectionDataBase/config.php";

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
             header('Location: http://localhost/Patopay/home/');
        }else{
            unset($_SESSION['email']);
            unset($_SESSION['password']);
             header('Location: http://localhost/Patopay/login/register/');
        }
    }

    if (isset($_POST['registrar'])){
        header('Location: http://localhost/Patopay/login/register/');
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
    bottom: 20%;
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
    justify-content: space-between;
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
        <h1>Olá!</h1>
        <p>Bem vindo ao jeito mais <b>simpático</b> de cobrar alguém.</p>
    </div>
    <img src="<?php echo $img?>" alt="">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="Email" name="email" class="input" ><br><br>
        <input type="password" name="password" id="" placeholder="Senha" class="input" ><br><br>
        <div class="action">
        <input style="background: #F6D862; border: none;" type="submit" name="submit" value="Entrar">
        <input type="submit" name="registrar" value="Registrar">
        </div>

    </form>
</body>
</html>