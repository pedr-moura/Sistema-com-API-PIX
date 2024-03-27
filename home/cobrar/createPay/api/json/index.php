<?php

require "PayloadPix.php";

include_once "/storage/ssd2/294/22002294/public_html/home/cobrar/createPay/api/ValidationUrlPix.php";

$payloadPix = (new PayloadPix)
    ->setPixKey($get_pixkey)
    ->setMerchantName($fullName)
    ->setMerchantCity("SAO PAULO")
    ->setAmount($get_payvalue) 
    ->setTxid("PATOPAY2024");


$payLoadQRCode = $payloadPix->getPayLoad();


$payloadJson = json_encode([
    'pix_key' => $payloadPix->getPixKey(),
    'merchant_name' => $payloadPix->getMerchantName(),
    'merchant_city' => $payloadPix->getMerchantCity(),
    'amount' => $payloadPix->getAmount(),
    'description' => $payloadPix->getDescription(),
    'txid' => $payloadPix->getTxid(),
    'payload_code' => $payLoadQRCode // Use $payLoadQRCode instead of $payloadPix
]);

echo $payloadJson;
