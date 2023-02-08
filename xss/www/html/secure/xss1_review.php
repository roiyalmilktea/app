<p><?php echo date("Y年n月j日"); ?></p>

		<img src="./images/reflected-xss_flow.png" alt = "先程の流れ" title="photo">
		<ol>
			<li>被害者が悪意のあるスクリプトが含まれたリンク先にアクセス</li>
			<li>攻撃スクリプトが実行されてレスポンスが返る</li>
			<li>被害者側でXSSが実行される</li>
			<img src="./images/reflected_xss_confirm.png" alt="F12キー">
			<br>#スクリプトが実行された痕跡がある
		</ol>
		

		<h3>ここで適切なコーディングを行わなかったため、Webアプリケーションからの入力値をスクリプトとして扱っています。<br>その結果、scriptタグが実行されてしまいます。</h3>
		<h3>最も有効な処理は意味を持った文字(特殊文字)を他の文字に置き換えてしまう方法です。</h3><br>
		<h3>この方法を</h3><h2 id="text1">エスケープ処理</h2><h3>と言います。</h3>
		<h3>パラメータを渡す時に<h2>htmlspecialchars('パラメータ')</h2>を使いましょう。</h3><br>
		<img src="images/php-escape.png" alt="escape">
		<h3>また、その他にも入力文字数を制限するという方法もあります。<br></h3>


		
		<h3>そこで、以下が攻撃者の攻撃シナリオ一例を表した構成図です。<br></h3>
		<img src="images/reflected-xss.png" alt="反射型XSSの流れ">

		<h3>XSSを利用した攻撃として<br></h3>
		<li>
			セッションハイジャック
		</li>
		<li>
			別のサイトへ誘導される
		</li>
		<li>
			Webページ内の機密情報の読み取り
		</li>
		<h3>が上げられます。</h3>

		<h3>パラメータをもらう時にエスケープ処理を施してある関数を使ったコーディングをする。</h3>
		<h3>これでよってスクリプトが実行されないようになります。<br></h3>
		<div style="padding: 15px;"></div>
		<h2>#!入力値を渡している処理を見つけて修正する。#!</h2>
		シェル上で<h2>./xss/www/html/secure/xss1_res.php</h2>のソースコードを修正
	        <br>
		<img src="./images/xss1_res_path.png" alt="path">
		<br>
		※同じソースコード
		<br>
   	
	<p>ソースコードを修正後、エスケープ処理を確認して終了</p>
	<div style="padding: 15px;"></div>
	<a href="http://localhost:8080/secure/xss1_req.php"><h2>実行画面へ移動</h2></a>
</body>
</html>