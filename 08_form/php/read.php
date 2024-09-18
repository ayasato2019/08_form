<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/styles/reset.css">
	<link rel="stylesheet" href="./assets/styles/styles.css">
	<title>ユーザ一覧</title>
</head>
<body>
	<div class="form inner">
		<h2 class="title" data-heading="registran">ユーザ一覧</h2>
		<?php
			// userlist.csvファイルを開く
			$file = fopen('./assets/data/userlist.csv', 'r');
			
			if ($file) {
				echo "<ul class='read-user-list'>";

				// CSVファイルの内容を1行ずつ読み込む
				while (($line = fgetcsv($file)) !== false) {
					$email = htmlspecialchars($line[0]);
					$token = htmlspecialchars($line[1]);
					$flag = isset($line[2]) ? htmlspecialchars($line[2]) : 'false'; // デフォルトは'false'

					// 本登録の状態をチェック
					if ($flag == 'true') {
						echo "<h2>本登録済み</h2>";
					} else {
						echo "<h2>本登録未達成</h2>";
					}

					// ユーザ情報を表示
					echo "<li>";
					echo "<p><label class='user-label'>ID</label><span>$token</span></p>";
					echo "<p><label class='user-label'>メールアドレス</label><span>$email</span></p>";
					echo "</li>";
				}

				echo "</ul>";

				// ファイルを閉じる
				fclose($file);
			} else {
				// エラー処理
				echo "<p>データを読み込めませんでした。</p>";
			}
		?>
	</div>
</body>
</html>
