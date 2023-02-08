<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>response</title>
	
	</head>
	<body>
		<?php 
		#脆弱だよー
		echo 'hoge!!!!!!!!!!!! ' .htmlspecialchars($_POST['data']);
		?>
	</br>
	<div style="padding: 15px;"></div>
	
	<a href="http://localhost:8080">最初のページに戻る</a>
	
        </body>
</html>
