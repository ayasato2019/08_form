<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/styles/reset.css">
	<link rel="stylesheet" href="./assets/styles/styles.css">
	<title>新規登録</title>
</head>
<body>
	
	<div class="form inner">
		<form action="./write.php" method="post">
			<h2 class="title" data-heading="registran">新規登録</h2>
			<!-- <div class="question-item">
				<label>
					<span class="question-title">ユーザー名</span>
					<input type="text" name="person" required>
				</label>
			</div> -->
			<div class="question-item">
				<label>
					<span class="question-title">メールアドレス</span>
					<input type="email" name="E-mail" required>
				</label>
			</div>
			<button type="submit" class="submit-button">メール送信</button>
		</form>
	</div>
</body>
</html>