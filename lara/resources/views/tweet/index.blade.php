<!doctype html>
<html lang="ja">
<head>
	<meta name="viewport"
	content="width=device-width,user-scalabl=no, initial-scale=1.0,
	maximum-scale=1.0, minimum-scale=1.0">
	textarea id="tweet-content" type="text" name="tweet" placeholder 	="つぶやき入力"></textarea>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>tubuyaitar</title>
	@error('tweet')
	<p style="color: red;">{{ $message }}</p>
	@enderror

</head>

<body>
	<div>
	  <p>投稿フォーム</p>
	  <form action="{{ route('tweet.create') }}" method="post">
	@csrf
	<label for="tweet-content">tubu</label>
	<span>140moji</span>
	<textarea id="tweet-content" type="text" name="tweet" placeholder="tubu_input"></textarea>
	<button type="submit">toko</button>
	   </form>
	</div>
	<h1>セキュリティキャンプ2022東京大会のレポート作成</h1>
	<h2>tubuyaki</h2>

	
	
	<li>できたこと</li>
	1.オンライン越しでコンテナを立てるサポート</br>
	2.講義内容の理解</br>
        3.学習しようとする意欲
	
	
	<li>できなかったこと</li>
	1.環境構築でlinuxdemonの設定を把握できなかった。</br>
	2.脆弱性を作り込めなかった</br>
	3.シェルの理解が浅かった</br>
	4.githubの基礎的な知識</br>
	5.AWSのS3の理解が浅い</br>
	6.今後のキャリアについて</br>

	<p>{{ $name }}</p>特に3,4,6は重要だと思う。
</body>
</html>
