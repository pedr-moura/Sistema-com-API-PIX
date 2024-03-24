<?php 
<<<<<<< HEAD
$granada = "/css/midia/granada.png";
$bastão = "/css/midia/bastão.png";
$muchaco = "/css/midia/muchacos.png";
$pedrada = "/css/midia/pedrada.png";
$pistoladupla = "/css/midia/pistola-dupla.png";
$pistola = "/css/midia/pistola.png";

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        header('Location: /login/');
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    }else{
        $usuario = $_SESSION['email'];
    }

    if (isset($_POST['sair'])) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: /login/');
    }

    if (isset($_POST['back'])) {
        header('Location: /home/');
    }
    
    $sqlNome = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sqlNome);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $userData = $result->fetch_assoc(); 
    if ($userData) {
        $fullName = $userData['name']; 
        $firstName = explode(' ', $fullName)[0];

        $countpays = $userData['count_pays']; 

        if($countpays == 0){ $img = $granada;}
        if($countpays > 0){ $img = $bastão;}
        if($countpays > 3){ $img = $pedrada;}
        if($countpays > 8){ $img = $muchaco;}
        if($countpays > 15){ $img = $pistola;}
        if($countpays > 20){ $img = $pistoladupla;}
        
        $theme = $userData['theme']; 
        
        if($theme == 0){
            $background = "#77DD77";
            $object = "#f3f3f3";
        }
        if($theme == 1){
            $background = "#103f10";
            $object = "#515151";
        }
        
    }
    
=======
$granada = "/patopay/css/midia/granada.png";
$bastão = "/patopay/css/midia/bastão.png";
$muchaco = "/patopay/css/midia/muchacos.png";
$pedrada = "/patopay/css/midia/pedrada.png";
$pistoladupla = "/patopay/css/midia/pistola-dupla.png";
$pistola = "/patopay/css/midia/pistola.png";

>>>>>>> 128991cf017bf9e9157c401921ef389785fde241
?>