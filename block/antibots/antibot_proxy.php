<?php
$blockProxy = strtolower($blockProxy);
$ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);
if ($blockProxy == "true") {
	$response = checkProxy($ip);
	if ($response == "false") {
			$content = "AntiBots ".$_SERVER['HTTP_USER_AGENT']." [ Proxy ] \r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: http://www.google.com/");exit();
	}
}
?>