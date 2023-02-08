<?php


if(!array_key_exists ("name", $_POST) || $_POST['name'] == NULL || $_POST['name'] == ''){

 $isempty = true;


}else {
	
	echo '<pre>';
	echo 'submit' . $_POST['name'];

	echo '</pre>';
	}

	

?>
<a href="http://localhost:8080/conclude.php">戻る</a>
