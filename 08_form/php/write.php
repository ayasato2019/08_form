<?php
	$email = $_POST["E-mail"];

	// ユニークIDの発行
	$token = bin2hex(random_bytes(16));
	$file = fopen("./assets/data/userlist.csv", "a");
	$bkfile = fopen("./assets/data/backup.csv", "a");
	fwrite($file, "$email,$token\n");
	fwrite($bkfile, "$email,$token\n");
	fclose($file);

	// 確認URLの作成
	$confirmationUrl = "http://yourdomain.com/registran.php?token=$token";

	// メール送信の準備
	$to = $email;  // ここで $to を正しく定義
	$subject = "登録確認";
	$message = "以下のリンクをクリックして登録を完了してください:\n$confirmationUrl";
	$headers = "From: no-reply@yourdomain.com";

	// メール送信
	if (mail($to, $subject, $message, $headers)) {
	    // メール送信成功時のリダイレクト
	    header("Location: contactform.php");
	    exit;
	} else {
	    echo "メールの送信に失敗しました。";
	}
?>
