<?php 



$url = "http://66.45.237.70/api.php";
$number="8801735977116,8801996053574";
$text="Hello..this is test sms";
$data= array(
'username'=>"sumon16",
'password'=>"NJQD2SC5",
'number'=>"$number",
'message'=>"$text"
);

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
$p = explode("|",$smsresult);
$sendstatus = $p[0];




 ?>