<!doctype html>
<html>
<head>

</head>
<body>
   
   <p>This is a excute.</p>
  
   <p><?php echo date("Y年n月j日"); ?></p>
   <!DOCTYPE html>
<html>
	<body>
		<h1>Reflected XSS(以下、反射型XSS)の説明<br></h1>
		
	
		<p1>反射型XSSは攻撃スクリプトをHTTPリクエスト中に仕込むタイプのXSSです。</p1>
		<p1><br>Webアプリケーション側がこの仕込まれた攻撃スクリプトを適切に処理出来ずにHTTPレスポンス中に出力してしまうことで発生します。<br></p1>
		<p1>リクエストとレスポンスの処理を行った画面を見ると、URLに入力値が渡されています。<br></p1>
		<img src="./images/querypara.png" alt="レスポンスが返された" tilte="request and response">
		<h2>反射型XSSを引き起こせる脆弱なプログラムだとスクリプトが実行されてしまう。</br></h2>
	        <p2>以下のように入力フォームに実行する<br></p2>
		<img src="./images/xss_script.png" alt='スクリプトの実行例' title="script">
		<br>
	</body>
</html>

  
   
   <h3>please write something.</h3>
   <form method="POST" action="/vulune/xss1_res.php">

   
    
       <input type="text" name="data"/>
       <input type="submit" value="送信"/>
   </form>
</body>
</html>

