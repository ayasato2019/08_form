<?php
	$email = $_POST["E-mail"];

	// ユニークIDの発行
	$token = bin2hex(random_bytes(16));
	//初回でフラグを付与
	$flag = "true";
	$file = fopen("./assets/data/pre_user.csv", "a");
	fwrite($file, "$email,$token,$flag\n");
	fwrite($bkfile, "$email,$token,$flag\n");
	fclose($file);

	header("Location: contactform.php");

?>
