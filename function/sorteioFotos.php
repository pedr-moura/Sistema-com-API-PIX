<?php 
$granada = "/patopay/css/midia/granada.png";
$bastão = "/patopay/css/midia/bastão.png";
$muchaco = "/patopay/css/midia/muchacos.png";
$pedrada = "/patopay/css/midia/pedrada.png";
$pistoladupla = "/patopay/css/midia/pistola-dupla.png";
$pistola = "/patopay/css/midia/pistola.png";

$sorteio = mt_rand(1,6);
$img = '';

if($sorteio == 1){ $img = $granada;}
if($sorteio == 2){ $img = $bastão;}
if($sorteio == 3){ $img = $muchaco;}
if($sorteio == 4){ $img = $pedrada;}
if($sorteio == 5){ $img = $pistoladupla;}
if($sorteio == 6){ $img = $pistola;}
?>