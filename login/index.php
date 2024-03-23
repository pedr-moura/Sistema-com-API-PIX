
<?php 

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