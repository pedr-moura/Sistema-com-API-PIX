<?php
include 'phpqrcode/qrlib.php';
require "PayloadPix.php";
include_once "/storage/ssd2/294/22002294/public_html/home/cobrar/createPay/api/ValidationUrlPix.php";

$payLoadQRCode = (new PayloadPix)
->setPixKey($get_pixkey)
->setMerchantName($fullName)
->setMerchantCity("SAO PAULO")
->setAmount($get_payvalue)
->setDescription("$descricao_pix") 
->setTxid("PATOPAY2024")
->getPayLoad();


$tamanhoQrCode = 3; //tamanho QRCODE
$nivelCorrecao = 'H'; // Correcao de erro (L, M, Q, H)

ob_start();
QRcode::png($payLoadQRCode, null, $nivelCorrecao, $tamanhoQrCode);
$imageData = ob_get_contents(); 
ob_end_clean();

$imageBase64 = base64_encode($imageData);





