<!doctype html>


<html>
	<title>xss2</title>
<body>
	スクリプトを実行する場合、alert(`1`)とする ``はctrl+@
	<form method="POST" action="/secure/xss2_res.php">
		  <div> name</br>
		  <textarea name="name"></textarea>
		  <div> detail</div>
		  <textarea name="detail"></textarea>
		</br>
		

			
		<button type="submit" name="button">登録する</button>
	</form>
</br>
	stored_xss

</body>
</html>
