<?php
    include_once "/storage/ssd2/294/22002294/public_html/connectionDataBase/config.php";
    
if(isset($_GET['api_key']) && isset($_GET['payvalue']) && isset($_GET['payname'])) {
    $get_api_key = $_GET['api_key'];
    $get_payvalue = number_format($_GET['payvalue'],2,'.','');
    $get_payname = $_GET['payname'];
    $payname = $_GET['payname'];

$sqlNome = "SELECT * FROM users WHERE api_key = ?";
$stmt = $conn->prepare($sqlNome);
$stmt->bind_param("s", $get_api_key);
$stmt->execute();
$result = $stmt->get_result();

$userData = $result->fetch_assoc(); 
$get_pixkey = "";
if ($userData) {
    $get_pixkey = $userData['pix_key'];
}

if($get_pixkey == ""){
    $get_pixkey = "link invalido";
}

} 

$sqlNome = "SELECT * FROM users WHERE pix_key = ?";
$stmt = $conn->prepare($sqlNome);
$stmt->bind_param("s", $get_pixkey);
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

        }
            if (isset($_POST['updatecountpay'])) {
            $count_pays = $userData['count_pays'];
            $new_count_pays = $count_pays + 1;
            $email = $userData['email'];
            
            $sql = "UPDATE users SET count_pays = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $new_count_pays, $email);
            $stmt->execute();   
            
            header('Location: /home/');
            
        }
        
        if (isset($_GET['pay'])) {
            $_SESSION['pix_key'] = $userData['pix_key'];
            $_SESSION['payvalue'] = $_GET['payvalue'];
            $_SESSION['payname'] = $_GET['payname'];
            
            $apikey = $userData['api_key'];
            $payvalue = $_GET['payvalue'];
            $payname = $_GET['payname'];
            header("Location: createPay/api/?api_key=".$apikey."&payname=".$_GET['payname']."&payvalue=".$_GET['payvalue']);
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

$reflexoes_ironicas = [
    "O mundo está cheio de pessoas interessantes... e eu não sou uma delas.",
    "Quem disse que a vida precisa fazer sentido?",
    "Estou tão ocupado fingindo que estou ocupado.",
    "Meu superpoder é transformar café em reclamações.",
    "A paciência é uma virtude, mas eu não sou tão virtuoso assim.",
    "Se o sarcasmo fosse um esporte, eu seria um atleta olímpico.",
    "Ah, a vida! Sempre encontrando novas maneiras de me decepcionar.",
    "Sou uma pessoa muito madura... quando é conveniente.",
    "Só mais um dia na escola da vida, onde as aulas são chatas e os professores são crueis.",
    "Não se preocupe, minha capacidade de preocupação está totalmente esgotada.",
    "Eu sempre dou 100%... quando estou dormindo.",
    "Desculpe, eu não ouvi. Eu estava ocupado ignorando você.",
    "Não se preocupe em entender, você nunca conseguirá.",
    "Amo o som do silêncio... especialmente quando estou longe de você.",
    "O sarcasmo é o meu amor não tão secreto.",
    "Nunca deixe para amanhã o que você pode ignorar hoje.",
    "Minha especialidade é encontrar problemas onde eles não existem.",
    "Quanto mais eu conheço as pessoas, mais eu gosto do meu cachorro.",
    "Fazer sentido é superestimado, não acha?",
    "Se você quer algo bem feito, não me peça para fazer.",
    "Desculpe, minha paciência acabou junto com meu bom humor.",
    "A vida é uma comédia, e eu sou apenas o palhaço.",
    "Não se preocupe, a ironia é apenas o meu jeito carinhoso de ser.",
    "A vida é curta. Sorria enquanto ainda tem dentes.",
    "Posso não ser perfeito, mas pelo menos não sou você.",
    "Acredite em você mesmo. Ou não. Eu não ligo.",
    "Se a vida te der limões, adicione sal e tequila.",
    "O sarcasmo é a minha maneira educada de dizer que você é idiota.",
    "Não se preocupe, o sarcasmo é apenas o meu jeito delicado de dizer 'amo você'.",
    "As melhores piadas são aquelas que eu faço sobre mim mesmo."
];

$indice_sorteado = array_rand($reflexoes_ironicas);
$descricao_pix = "Ps " . str_replace(',','',$reflexoes_ironicas[$indice_sorteado]);
        
               $payname = $_GET['payname'] ?? '';
$cobrancas = [
    "Ei $payname, parece que a dívida está aprendendo a tocar violino!",
    "$payname, a dívida está juntando teias de aranha, é hora de agitar as coisas!",
    "Oi $payname, a dívida está praticando ioga, mas ainda não encontrou sua zenitude financeira!",
    "$payname, a dívida está construindo um castelo de cartas, mas vamos derrubá-lo com nossa solução!",
    "Ei $payname, a dívida está treinando para a maratona financeira, mas vamos cruzar a linha de chegada antes!",
    "$payname, a dívida está tentando uma carreira como chef, mas só está cozinhando problemas!",
    "Oi $payname, a dívida está fazendo uma coleção de selos, mas nós preferimos colecionar cheques!",
    "$payname, a dívida está organizando uma festa surpresa para nós, mas nós surpreenderemos ela primeiro!",
    "Ei $payname, a dívida está aprendendo malabarismo, mas vamos mostrar a ela como equilibrar as finanças!",
    "$payname, a dívida está montando um quebra-cabeça, mas nós somos a peça que falta para resolver isso!",
    "Oi $payname, a dívida está praticando mergulho, mas vamos impedir que ela afunde nossas finanças!",
    "$payname, a dívida está cultivando um jardim de problemas, vamos plantar as sementes da solução!",
    "Ei $payname, a dívida está tentando uma carreira como DJ, mas só está mixando despesas!",
    "$payname, a dívida está montando uma banda, mas vamos ser os maestros de nossas finanças!",
    "Oi $payname, a dívida está criando sua própria linha de moda, mas nós estamos vestindo a camisa da liberdade financeira!",
    "$payname, a dívida está construindo um castelo de areia, mas nós somos a maré que vai lavá-lo!",
    "Ei $payname, a dívida está fazendo uma lista de desejos, mas nós somos o desejo de nos livrar dela!",
    "$payname, a dívida está tentando um novo penteado, mas não vamos pentear pra debaixo do tapete!",
    "Oi $payname, a dívida está assistindo tutoriais de malabarismo, mas nós somos os mestres da economia!",
    "$payname, a dívida está fazendo uma limonada com nossos limões, mas vamos transformá-la em limonada financeira!",
    "Ei $payname, a dívida está fazendo planos para o futuro, mas nós somos o futuro das nossas finanças!",
    "$payname, a dívida está montando um quebra-cabeça, mas nós temos todas as peças da solução!",
    "Oi $payname, a dívida está tentando ser um Picasso financeiro, mas nós somos a obra-prima da estabilidade!",
    "$payname, a dívida está tentando encontrar seu caminho, mas nós somos o GPS para a liberdade financeira!",
    "Ei $payname, a dívida está tentando decifrar um enigma, mas nós somos a resposta para a tranquilidade financeira!",
    "$payname, a dívida está tentando uma nova coreografia, mas nós somos os passos certos para o equilíbrio!",
    "Oi $payname, a dívida está procurando um atalho, mas nós somos o caminho seguro para o sucesso financeiro!",
    "$payname, a dívida está tentando uma carreira de mágica, mas nós não vamos deixar ela desaparecer com nosso dinheiro!",
    "Ei $payname, a dívida está tentando escalar uma montanha, mas nós somos o topo da estabilidade financeira!",
    "$payname, a dívida está tentando navegar em águas turbulentas, mas nós somos o porto seguro das finanças!",
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

    $reflexoes = [
    "O tempo é o que você faz dele.",
    "As mudanças começam dentro de você.",
    "A felicidade está nas pequenas coisas.",
    "Aprenda com o passado, viva no presente.",
    "A jornada é tão importante quanto o destino.",
    "Seja a luz que ilumina o seu caminho.",
    "A verdadeira liberdade vem da aceitação.",
    "O amor próprio é a chave da paz interior.",
    "O sucesso nasce da persistência.",
    "Sorria, mesmo nos dias difíceis.",
    "Cultive gratidão em todos os momentos.",
    "Seja gentil, mesmo quando ninguém está olhando.",
    "O perdão liberta o coração.",
    "Confie no processo da vida.",
    "A verdadeira riqueza está na simplicidade.",
    "Abra-se para novas possibilidades.",
    "Todo desafio traz consigo uma lição.",
    "Apreciar o presente é uma forma de gratidão.",
    "Aprenda a encontrar beleza na imperfeição.",
    "Suas escolhas moldam seu destino.",
    "A calma é a chave para a clareza mental.",
    "Seja autêntico em todas as suas ações.",
    "Encontre beleza na jornada, não apenas no destino.",
    "O amor é a linguagem universal do coração.",
    "Cultive a paciência em tempos de adversidade.",
    "A resiliência transforma desafios em oportunidades.",
    "Não se prenda ao passado, abrace o presente.",
    "Seja grato pelo que você tem, mas busque o que deseja.",
    "A simplicidade é o caminho para a paz interior.",
    "Seja o amor que você deseja receber."
];

$indice_sorteado = array_rand($reflexoes);
$descricao_pix = $reflexoes[$indice_sorteado];

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

$descricao_pix = '';
    }
    
    $firstName = explode(' ', $fullName)[0];
    $firstName = ucwords(strtolower($firstName));

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
   
 
    if (isset($_POST['back'])) {
        header('Location: /home/');
    }
    
    $payzerovalue = '';
    $payzerovalue_css = 'none';
    $get_payvalue_css = '';
    
    if($get_payvalue == 0.00){
        $payzerovalue = 'um Pix';
        $get_payvalue_css = 'none';
        $payzerovalue_css = '';
    }
    





if ((!isset($_GET['cobrancaSorteada']) == true)) {
}else{
        $cobrancaSorteada = $_GET['cobrancaSorteada'];
}

// if (isset($_GET['pay'])) {
//     $_SESSION['pix_key'] = $userData['pix_key'];
//     $_SESSION['payvalue'] = $_GET['payvalue'];
//     $_SESSION['payname'] = $_GET['payname'];

//     $apikey = $userData['api_key'];
//     $payvalue = $_GET['payvalue'];
//     $payname = $_GET['payname'];


     $cobrancaSorteada_url = urlencode($cobrancaSorteada);
//     header("Location: https://patopay.000webhostapp.com/home/cobrar/createPay/api/?api_key=$apikey&payname=$payname&payvalue=$payvalue&cobrancaSorteada=$cobrancaSorteada");
//}

?>
