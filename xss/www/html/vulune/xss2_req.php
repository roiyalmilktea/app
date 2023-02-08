<!doctype html>


<html>
	<title>xss2</title>
<body>
	<h1>Stored XSS(以下、継続型XSS)の説明<br></h1>
		
		<p1>一度攻撃が成功すると、後は正規のユーザがそのWebページにアクセスするだけで攻撃者の用意したスクリプトが実行されてしまいます。<br></p1>
		
		
		<p1>Webアプリケーションに格納されたスクリプトが多くのユーザに参照される場合、この攻撃が与える被害の影響が大きくなります。<br></p1>

		<p1>継続型XSSとは攻撃スクリプトがWebアプリケーション内部に保存されて実行されるXSSです。<br></p1>
		<h3>このような手順です。<br></h3>
		<ol>
			<li>タスクと内容にそれぞれ適当な文字列を入れます。</li>
			<li>登録ボタンをクリックすると動的にHTMLが生成され、入力値が格納されます。</li>
			<li>内容を入力するフォームにスクリプトを入れて実行</li>
			スクリプトを実行する場合、alert(`1`)とする ``はctrl+@
		
		</ol>
	<form method="POST" action="/vulune/xss2_res.php">
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

	