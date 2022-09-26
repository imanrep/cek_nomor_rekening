<?php

$url = "https://imanrep.com/api/cekRekening";

// Get Bank List
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array("Content-Type: application/x-www-form-urlencoded");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = "get=list";
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$resp = curl_exec($curl);


// Cek Rekening
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array("Content-Type: application/x-www-form-urlencoded");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = "get=rekening&account=104818833003&bank_code=jago";
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

?>

