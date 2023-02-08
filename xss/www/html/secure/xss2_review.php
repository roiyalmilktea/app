<!doctype html>
<html>
<head>
	<title>stored_xss解説</title>

</head>
<body>
   
   <p>This is a excute.</p>
  
   <p><?php echo date("Y年n月j日"); ?></p>
   
   
	<p1>継続型XSSとは攻撃スクリプトがWebアプリケーション内部に保存されて実行されるXSSです。<br></p1>
		<p1>先程の流れについて解説します。<br></p1>
		<img src="./images/stored-xss_flow.png" alt="先程の流れ" title="flow">
		
		
		<p1>一度攻撃が成功すると、スクリプトが格納されてしまうため、正規のユーザがそのWebページにアクセスするだけで攻撃者の用意したスクリプトが実行されてしまいます。従って、<br></p1>
		<h3>反射型XSSより継続型XSSの方が攻撃を成功させるハードルが低いです。<br></h3>
		<p1>リクエスト処理をしたところで対策がされていないため脆弱性があります。<br></p1>
		<img src="./images/php-param-vuln.png" alt="対策が施されていないコード" title="photo"><br>

		
		
		<h3>以下が攻撃シナリオの一例を表した構成図です。<br></h3>
		<img src="./images/stored-xss.png" alt="継続型XSSの流れ" title="stored-xss">

		<h3>すでにスクリプトが仕掛けてあるため、被害者は意図せずに脆弱なWebサーバにアクセスしてしまい、<br>攻撃スクリプトが実行されてしまいます。<br></h3>
		<img src="./images/db_log.png" alt="データベースにスクリプトが蓄積されている" title="stored-xss">
		<br><p1>すでにデータベースにスクリプトが蓄積されている↑</p1>

		<h2>#!入力値を渡している処理を見つけて修正する。#!</h2>
		
		シェル上で<h2>./xss/www/html/secure/xss2_res.php</h2>のソースコードを修正<br>
		<img src="./images/xss2_res_path.png" alt="path"><br>※同じソースコード<br>
		<div style="padding: 15px;"></div>
		ソースコードを修正後、エスケープ処理を確認して終了
		<br>
		<div style="padding: 15px;"></div>
		<a href="http://localhost:8080/secure/xss2_req.php"><h2>実行画面へ移動</h2></a>
		
        </body>
</html>
