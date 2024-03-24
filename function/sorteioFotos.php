<?php 
$granada = "/css/midia/granada.png";
$bastão = "/css/midia/bastão.png";
$muchaco = "/css/midia/muchacos.png";
$pedrada = "/css/midia/pedrada.png";
$pistoladupla = "/css/midia/pistola-dupla.png";
$pistola = "/css/midia/pistola.png";

$sorteio = mt_rand(1,6);
$img = '';

if($sorteio == 1){ $img = $granada;}
if($sorteio == 2){ $img = $bastão;}
if($sorteio == 3){ $img = $muchaco;}
if($sorteio == 4){ $img = $pedrada;}
if($sorteio == 5){ $img = $pistoladupla;}
if($sorteio == 6){ $img = $pistola;}
?>