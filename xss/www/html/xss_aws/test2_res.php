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
	$data = $_POST["data"];#<script>alert('0')</script>
	
	
	if ($data == "<script>alert(document.cookie)</script>"){
		echo "xss_str{a29yZXdvb3V5b3NoaXRlc2Vzc2lvbmhpZ2hqYWNr}";
		echo "</br>";
		
		
	}
	else{
		echo "Wrong....";
		echo "<br>";
		echo '<a href="18.181.193.86/xss_aws/test3_req.php">やり直す</a>';
	}
	?>

<br>
<a href="http://18.181.193.86/xss_aws/start.php">問題選択へ戻る</a>	
</html>