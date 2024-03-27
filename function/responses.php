<?php 
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
} else {
    $usuario = $_SESSION['email'];
}
if (isset($_POST['sair'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: /login/');
}

$sqlNome = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sqlNome);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

$userData = $result->fetch_assoc(); 
if ($userData) {
    $pixkey = $userData['pix_key'];
    $fullName = $userData['name'];
    $numbertheme = $userData['theme'];
    if($numbertheme == 1){
        $atualtheme = "Escuro";
    } else {
        $atualtheme = "Claro";
    }
    
    $numberhumor = $userData['humor'];
    if($numberhumor == 1){
        $atualhumor = "Irônico";
        
            $frases = array(
            "Desafio aceito, vou com minha capa de super-herói!",
            "Topado! Estou confortável como um gato num tapete macio.",
            "Ah, desafio aceito, minha coroa de 'rei da improbabilidade' está pronta!",
            "Topado! Mais uma montanha russa no parque do absurdo.",
            "Desafio aceito, faço isso com uma mão nas costas.",
            "Estou dentro, só preciso do manual de 'situações impossíveis'.",
            "Topado! O desafio é uma pérola no meu colar.",
            "Desafio aceito, lidarei com maestria no circo do absurdo.",
            "Ah, desafio? É só mais uma piada no meu repertório.",
            "Topado! Minha varinha mágica da improbabilidade está pronta.",
            "Desafio aceito, avise quando ficar difícil.",
            "Estou dentro, mais uma parada no parque do impossível.",
            "Desafio topado, farei parecer tão fácil que impressionará.",
            "Topado! Faço com olhos vendados e uma mão.",
            "Desafio aceito, transformarei em conto de fadas do absurdo.",
            "Ah, desafio? Mais uma aventura no parque do ridículo.",
            "Topado! Nado de braçada no mar de impossibilidades.",
            "Desafio aceito, mais um passeio no jardim da improbabilidade.",
            "Estou dentro, vestindo minha armadura da irrelevância.",
            "Desafio topado, farei com pé nas costas e sorriso.",
            "Ah, desafio? Só mais um passo de dança no palco.",
            "Topado! Resolvo antes mesmo de terminarem de contar.",
            "Desafio aceito, com tanto estilo que o impossível invejará.",
            "Estou dentro, mais uma canção no repertório de loucuras.",
            "Desafio topado, abraçarei essa loucura com amor.",
            "Ah, desafio? Mais uma volta na montanha-russa inacreditável.",
            "Topado! Farei parecer tão fácil que os deuses aplaudirão.",
            "Desafio aceito, só mais um capítulo na novela do inesperado.",
            "Estou dentro, só mais uma estrela no meu céu."
        );
        
        $fraseSorteada = $frases[array_rand($frases)];
       $payname = $_GET['payname'] ?? '';
$cobrancas = [
    "Ei $payname, a dívida está fazendo aniversário!",
    "$payname, se a dívida fosse um filme, já estaria em DVD!",
    "Oi $payname, a dívida está começando a colecionar poeira!",
    "$payname, a dívida está te chamando para uma festa de quitação!",
    "Ei $payname, a dívida está se sentindo solitária, vamos nos reunir!",
    "$payname, a dívida está pensando em começar uma carreira de modelo de cobrança!",
    "Oi $payname, a dívida está criando vida própria, precisamos controlá-la!",
    "$payname, a dívida está fazendo mais sucesso que a Netflix, vamos resolver isso!",
    "Ei $payname, a dívida está escrevendo sua própria biografia, precisamos de um final feliz!",
    "$payname, a dívida está se tornando um meme, vamos fazer ela viralizar!",
    "Oi $payname, a dívida está planejando uma fuga, vamos impedi-la!",
    "$payname, a dívida está ensaiando para um musical, precisamos do último ato!",
    "Ei $payname, a dívida está fazendo um curso de stand-up comedy, mas não está engraçada!",
    "$payname, a dívida está escrevendo um livro de piadas, mas nenhuma é boa como a nossa!",
    "Oi $payname, a dívida está dando entrevistas para jornais, precisamos da nossa versão da história!",
    "$payname, a dívida está virando uma lenda urbana, vamos desvendar esse mistério!",
    "Ei $payname, a dívida está criando sua própria hashtag, mas precisamos de um final feliz!",
    "$payname, a dívida está contratando um agente de relações públicas, vamos assumir o controle!",
    "Oi $payname, a dívida está se tornando a estrela de um reality show, precisamos de uma reviravolta!",
    "$payname, a dívida está planejando uma viagem ao redor do mundo, mas não temos passaporte!",
    "Ei $payname, a dívida está fazendo uma lista de reprodução no Spotify, mas não queremos ser parte dela!",
    "$payname, a dívida está ganhando seguidores nas redes sociais, precisamos de mais likes na nossa solução!",
    "Oi $payname, a dívida está dando conselhos amorosos, mas precisamos resolver nosso relacionamento primeiro!",
    "$payname, a dívida está fazendo um teste de personalidade, mas sabemos que é hora de mostrar a nossa!",
    "Ei $payname, a dívida está criando uma empresa de consultoria financeira, mas nós somos os especialistas!",
    "$payname, a dívida está se candidatando a presidente, mas precisamos votar pela nossa liberdade financeira!",
    "Oi $payname, a dívida está tentando se tornar um super-herói, mas sabemos que a verdadeira vitória está em nos livrarmos dela!",
    "$payname, a dívida está escrevendo sua própria história de origem, mas nós somos os autores do nosso destino financeiro!"
];

$cobrancaSorteada = $cobrancas[array_rand($cobrancas)];

        
    } 
        if($numberhumor == 0){
        $atualhumor = "Amigável";
        
            $frases = array(
            "Desafio encarado, é noix!",
            "Tarefa dada, eu tô dentro!",
            "Missão aceita, pode vir quente que eu tô fervendo!",
            "Desafio topado, tranquilo!",
            "Missão passada, tamo junto!",
            "Tarefa entregue, deixa comigo!",
            "Proposta feita, eu dou um jeito nisso, de boa!",
            "Desafio lançado, eu resolvo fácil!",
            "Missão aceita, tô nessa parada!",
            "Tarefa jogada, eu me viro nos trinta, brother!",
            "Desafio dado, eu resolvo na bucha!",
            "Missão proposta, tô ligado no que fazer!",
            "Tarefa assumida, eu resolvo na hora, sem caô!",
            "Desafio colocado, é só sucesso!",
            "Missão dada, pode deixar que eu acabo com isso!",
            "Tarefa atribuída, pode confiar que tá feita, malandro!",
            "Desafio aceito, é só alegria!",
            "Missão passada, eu resolvo rapidinho!",
            "Tarefa lançada, eu cuido sem choro!",
            "Desafio jogado, é só partir pro abraço!",
            "Missão entregue, pode contar comigo!",
            "Tarefa concluída, é nós que voa!",
            "Desafio enfrentado, é nóis!",
            "Missão cumprida, deixa comigo que eu faço acontecer!",
            "Tarefa executada, é no sapatinho!",
            "Desafio superado, relaxa que eu resolvo!",
            "Missão realizada, é sucesso na certa!",
            "Tarefa finalizada, é tranquilo, é favorável!",
            "Desafio vencido, tá feito!",
            "Missão concluída, é o que há!",
            "Tarefa completada, pode deixar que eu arrebento!"
        );
        
        $fraseSorteada = array_splice($frases, array_rand($frases), 1)[0];
        $payname = $_GET['payname'] ?? '';
        $cobrancas = [
    "Oi $payname, quando puder, podemos acertar isso?",
    "$payname, tudo bem? Só para lembrar sobre a dívida.",
    "Olá $payname, podemos conversar sobre a pendência?",
    "Ei $payname, podemos resolver isso de forma tranquila?",
    "Hey $payname, sem pressa, mas podemos acertar isso?",
    "Oi $payname, quando tiver um momento, podemos resolver?",
    "$payname, não se esqueça daquela conta, por favor.",
    "Olá $payname, será que podemos resolver essa questão?",
    "Ei $payname, estou à disposição para resolvermos isso.",
    "Hey $payname, vamos encontrar uma solução juntos?",
    "Oi $payname, podemos discutir sobre a dívida suavemente?",
    "$payname, quando puder, podemos acertar as contas?",
    "Olá $payname, não quero incomodar, mas precisamos resolver isso.",
    "Ei $payname, podemos resolver essa pendência em breve?",
    "Hey $payname, sem estresse, podemos acertar isso quando der.",
    "Oi $payname, vamos encontrar uma forma de resolver isso?",
    "$payname, podemos resolver essa questão de forma pacífica.",
    "Olá $payname, quando tiver um tempo, podemos conversar?",
    "Ei $payname, podemos resolver isso de maneira amigável?",
    "Hey $payname, não é urgente, mas podemos resolver eventualmente.",
    "Oi $payname, podemos acertar essa dívida quando possível?",
    "$payname, estou aqui para ajudar a resolver essa pendência.",
    "Olá $payname, não se preocupe, podemos resolver isso juntos.",
    "Ei $payname, vamos resolver essa questão com calma, ok?",
    "Hey $payname, sem pressão, podemos acertar isso quando quiser.",
    "Oi $payname, podemos discutir sobre essa dívida tranquilamente?",
    "$payname, quando tiver um momento, podemos resolver isso?",
    "Olá $payname, podemos encontrar uma solução para essa questão?",
    "Ei $payname, sem estresse, podemos acertar essa pendência depois.",
    "Hey $payname, vamos resolver isso de forma pacífica, certo?",
    "Oi $payname, quando puder, podemos acertar essa dívida?"
];

$cobrancaSorteada = $cobrancas[array_rand($cobrancas)];
    }
    
    if($numberhumor == 2){
        $atualhumor = "Sem humor";
        
            $frases = array(
            "Preencha as informações corretamente"
        );
        
        $fraseSorteada = array_splice($frases, array_rand($frases), 1)[0];
        $payname = $_GET['payname'] ?? '';
        $cobrancas = [
    "Oi $payname, você pode pagar com o QrCode ou com o Copia-Cola"
];

$cobrancaSorteada = $cobrancas[array_rand($cobrancas)];
    }

    $firstName = explode(' ', $fullName)[0];
    $firstName = ucwords(strtolower($firstName));

    $countpays = $userData['count_pays']; 

    if($countpays == 0) { 
        $img = $granada;
    }
    if($countpays > 0) { 
        $img = $bastão;
    }
    if($countpays > 2) { 
        $img = $pedrada;
    }
    if($countpays > 5) { 
        $img = $muchaco;
    }
    if($countpays > 9) { 
        $img = $pistola;
    }
    if($countpays > 15) { 
        $img = $pistoladupla;
    }

    $theme = $userData['theme']; 

    if($theme == 0) {
        $background = "#77DD77";
        $object = "#f3f3f3";
        $border = "black";
        $color = "#058c2b";
        $button_color = "white";
    }
    if($theme == 1) {
        $background = "#103f10";
        $object = "#515151";
        $border = "white";
        $color = "#28ff64";
        $button_color = "#515151";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['update'])) {
            $email = $_SESSION['email'];
            $uploadtheme = $_POST['uploadtheme'];

            if($uploadtheme == "um") {
                $theme = 1;
            } else {
                $theme = 0;
            }

            if($uploadtheme == "atual") {
                $theme = $userData['theme'];
            }
            $sql = "UPDATE users SET theme = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $theme, $email);
            $stmt->execute();

            $uploadhumor = $_POST['humor'];
            if($uploadhumor == "um") {
                $humor = 1;
            } else {
                $humor = 0;
                if($uploadhumor == "atual") {
                    $humor = $userData['humor'];
                }
                if($uploadhumor == "dois") {
                    $humor = 2;
                }
            }

            $sql = "UPDATE users SET humor = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $humor, $email);
            $stmt->execute();

            $uploadname = $_POST['uploadname'];
            $sql = "UPDATE users SET name = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $uploadname, $email);
            $stmt->execute();


        $uploadpixkey = $_POST['uploadpixkey'];
        $checkPixKeyQuery = "SELECT COUNT(*) as count FROM users WHERE pix_key = ?";
        $stmt = $conn->prepare($checkPixKeyQuery);
        $stmt->bind_param("s", $uploadpixkey);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $pixKeyExists = $row['count'];

        if ($pixKeyExists > 0) {
        } else {
            $sql = "UPDATE users SET pix_key = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $uploadpixkey, $email);
            $stmt->execute();   
        }
            header('Location: /home/config/');
        }
    }
    if (isset($_POST['back'])) {
        header('Location: /home/');
    }
}

// if (isset($_GET['pay'])) {
//     $_SESSION['pix_key'] = $userData['pix_key'];
//     $_SESSION['payvalue'] = $_GET['payvalue'];
//     $_SESSION['payname'] = $_GET['payname'];

//     $apikey = $userData['api_key'];
//     $payvalue = $_GET['payvalue'];
//     $payname = $_GET['payname'];


//     $cobrancaSorteada = urlencode($cobrancaSorteada);
//     header("Location: createPay/api/?api_key=$apikey&payname=$payname&payvalue=$payvalue&cobrancaSorteada=$cobrancaSorteada");
// }
        if (isset($_GET['pay'])) {
            $_SESSION['pix_key'] = $userData['pix_key'];
            $_SESSION['payvalue'] = $_GET['payvalue'];
            $_SESSION['payname'] = $_GET['payname'];
            
            $apikey = $userData['api_key'];
            $payvalue = $_GET['payvalue'];
            $payname = $_GET['payname'];
            header("Location: createPay/api/?api_key=".$apikey."&payname=".$_GET['payname']."&payvalue=".$_GET['payvalue']);
        }

?>


<style>
    .aopacity{
        animation: aopacity 0.5s ease 0s 1 normal forwards;
    }
    @keyframes aopacity {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}
    .aopacity2{
        animation: aopacity2 0.5s ease 0s 1 normal forwards;
    }
    @keyframes aopacity2 {
	0% {
		opacity: 0;
	}

	100% {
		opacity: 1;
	}
}
    
    .atoleft{
        animation: atoleft 1s ease 0s 1 normal forwards;
    }
    
@keyframes atoleft {
	0% {
		transform: translateX(-100px);
	}

	100% {
		transform: translateX(0px);
	}
}

    .atoright{
        animation: atoright 1s ease 0s 1 normal forwards;
    }
    @keyframes atoright {
	0% {
		transform: translateX(30%);
	}

	100% {
		transform: translateX(5%);
	}
}


</style>