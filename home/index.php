<?php 
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        header('Location: http://localhost/Patopay/login/');
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    }else{
        $usuario = $_SESSION['email'];
    }

    if (isset($_POST['sair'])) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: http://localhost/Patopay/login/');
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<input type="submit" name="sair" value="Encerrar sessão">
</form>

    <h1>
        <b>
            <?php echo $usuario?>
        </b>
    </h1>
</body>
</html>