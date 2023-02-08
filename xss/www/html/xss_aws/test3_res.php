<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
<?php
if(!array_key_exists ("data", $_POST) || $_POST['data'] == NULL || $_POST['data'] == ''){

 $isempty = true;


}else {
	
	echo '<pre>';
	echo 'Hello ' . $_POST['data'];

	echo '</pre>';
	}

?>

<?php

	$data = $_POST['data'];

	if($data == "<script>windows.location.href='https://x.gd/h0ivn';</script>"){
		echo '悪意のあるサイトに飛ばせたようだ...<br>';
		#aws上に偽サイトを作っておく
		echo "xss_str{a29yZWRlZmlzaGluZ3NpdGV3b291eW9kZWtpcnVuZQ}";
		
	}
	else{
		echo 'Wrong...';
		echo '<br>';
		echo '<a href="18.181.193.86/xss_aws/test3_req.php">やり直す</a>';
	}
	
?>

<br>
<a href="http://18.181.193.86/xss-learning/start.php">問題選択へ戻る</a>
</html>