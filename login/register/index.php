
<?php 
require "/xampp/htdocs/PatoPay/connectionDataBase/config.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $countPays = 0;
    $dateRegister = date('d/m/Y');
    $pixkey = $_POST['pixkey'];

    $result = mysqli_query($conn, "INSERT INTO users(email,name,password,count_pays,date_register,pix_key) VALUES ('$email','$name','$password','$countPays','$dateRegister','$pixkey')");
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
        <input type="text" placeholder="Nome" name="name"><br><br>
        <input type="text" placeholder="Email" name="email"><br><br>
        <input type="password" name="password" id="" placeholder="Senha"><br><br>
        <input type="text" name="pixkey" id="" placeholder="Sua chave PIX"><br><br>
        <input type="submit" name="submit" value="Registrar">

    </form>
</body>
</html>