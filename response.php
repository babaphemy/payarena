<?php
  
 function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

 
foreach ($_POST as $param_name => $param_val) 
$transactionId =  reset($_POST);
$url = "http://196.46.20.80:8085/Status/$transactionId";
 
$json = file_get_contents($url); // this WILL do an http request for you
$data = json_decode($json);

$orderId =  $data->{'Order Id'};
$amount =  $data->{'Amount'};
$currency =  $data->{'Currency'};
$status =  $data->{'Status'};
$cardHolderName =  $data->{'Card Holder'};
$maskedPAN =  $data->{'PAN'};
$scheme =  $data->{'Scheme'};
$statusDescription =  $data->{'StatusDescription'};
$approvalCode =  $data->{'Approval Code'};
$transactionDate =  $data->{'TranDateTime'};
$merchantName = 'KhromePay'; //Enter Your Business Name here. E.g. Unified Payment Services Limited
$merchantUrl = 'KHROMEPAY'; //Enter Your URL here. E.g www.payarena.com

 
 echo $orderId;
 echo $amount;
 echo $currency;
 echo $status;
 echo $cardHolderName;
 echo $maskedPAN;
 echo $scheme;
 echo $statusDescription;
 echo $approvalCode;
 echo $transactionDate;
 echo $merchantName;
 echo $merchantUrl;


 
 
?>