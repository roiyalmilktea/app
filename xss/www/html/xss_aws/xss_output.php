<?php


if(!array_key_exists ("name", $_POST) || $_POST['name'] == NULL || $_POST['name'] == ''){

 $isempty = true;


}else {
	
	echo '<pre>';
	echo 'Hello' . $_POST['name'];

	echo '</pre>';
	}

	

?>