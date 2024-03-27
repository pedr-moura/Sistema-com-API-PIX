<?php 
$granada = "/css/midia/granada.png";
$bastão = "/css/midia/bastão.png";
$muchaco = "/css/midia/muchacos.png";
$pedrada = "/css/midia/pedrada.png";
$pistoladupla = "/css/midia/pistola-dupla.png";
$pistola = "/css/midia/pistola.png";

$imagens = array($granada, $bastão, $muchaco, $pedrada, $pistoladupla, $pistola);

$sorteio = mt_rand(0, count($imagens) - 1);
$img = $imagens[$sorteio];
unset($imagens[$sorteio]);
$imagens = array_values($imagens); 

$img = isset($img) ? $img : '';
?>