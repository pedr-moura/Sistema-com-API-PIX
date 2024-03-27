<?php 
    session_start();
    include_once "/storage/ssd2/294/22002294/public_html/connectionDataBase/config.php";
    include_once "/storage/ssd2/294/22002294/public_html/function/responses.php";
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
    text-align: center;
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
    align-items: center;
    justify-content: center;
    bottom: -85px;
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
    z-index: 10000001;
}
.action input:hover {
opacity: 0.8;
}
.options {
    max-width: 300px;
    z-index: 999999999;
    display: flex;
    left: 50%;
    position: absolute;
    top: 40%;
    width: 75%;
    transform: translate(-50%, 0px);
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap;
}
.navgation img {
    width: 70px;
    border-radius: 20px;
    filter: drop-shadow(2px 12px 50px #f3f3f3);
}
.navgation img:hover {
opacity: 0.8;
}
span {
    font-size: 50px;
    position: relative;
    top: -20px;
}
.box {
    z-index: 999999;
    position: absolute;
    bottom: 20%;
    background: #f3f3f3;
    left: 50%;
    transform: translate(-50%, 0px);
    padding: 10px;
    width: 75%;
    max-width: 330px;
    height: 145px;
    border-radius: 20px;
}
.text p {
    color: #f6d862;
    font-weight: 700;
    font-size: 30px;
    text-align: center;
    position: absolute;
    bottom: -20px;
    width: 95%;
        text-shadow: 0px 0px 11px rgba(246, 216, 98, 0.32);
}
.countpays{
    z-index: 1;
    font-size: 90px;
    position: absolute;
    top: -90px;
    width: 150px;
    text-align: center;
    font-weight: 700;
    color: #f6d862;
    text-shadow: 0px 0px 11px rgba(246, 216, 98, 0.32);
}
.imggeneration img {
    position: absolute;
    right: 5px;
    top: -75px;
    width: 150px;
    z-index: 999;
}
.tarja {
    position: fixed;
    z-index: 10000000;
    bottom: -15px;
    width: 100%;
    height: 54px;
}
   
    </style>
</head>
<body style='background: <?php echo $background?>'>

<div class='tela'>
    
<div class="obj1" style="background: <?php echo $object ?>;"></div>

<div class="title">
    Olá, <br> <span><?php echo $firstName?></span>
</div>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<div class="action">
<input type="submit" value="Encerrar sessão" name="sair">
</div>
</form>

<div class="options aopacity">
    <div class="navgation">
        <button onclick="window.location.href='cobrar/'" style="background: none; border: none;">
            <img src="midia/cobrar.png" alt="">
        </button>
    </div>
    <div class="navgation">
        <button onclick="window.location.href='config/'" style="background: none; border: none;">
            <img src="midia/config.png" alt="Configurações">
        </button>
    </div>
    <div class="navgation">
        <button onclick="window.location.href='#'" style="background: none; border: none;">
            <img src="midia/extra.png" alt="">
        </button>
    </div>
</div>

<div class="box aopacity" style="background: <?php echo $object ?>;">
        <div class="countpays">
            <p><?php echo $countpays ?></p>
        </div>

        <div class="imggeneration atoright">
            <img src="<?php echo $img?>" alt="">
        </div>
        <div class="text">
        <p>Patos enviados</p>
        </div>
</div>
     
<div class='tarja' style='background: <?php echo $background?>'>
    <p> </p>
</div>
</div>
</body>
</html>