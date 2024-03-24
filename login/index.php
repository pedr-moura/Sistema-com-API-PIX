
<?php 
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
        require "/xampp/htdocs/PatoPay/connectionDataBase/config.php";

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

        $result = $conn -> query($sql);

        if (mysqli_num_rows($result) < 0) {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
        } else{
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
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="Email" name="email"><br><br>
        <input type="password" name="password" id="" placeholder="Senha"><br><br>
        <input type="submit" name="submit" value="login">

    </form>
</body>
</html>