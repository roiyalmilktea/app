<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <p3>このWebフォームには脆弱性があるみたい...</p3></br>
    <p3>'0'か'1'が表示される任意スクリプトを実行すると...</p3>

    <br>
    <h3>埋め込む文字は('0'),("0"),('1'),("1")に統一する.</h3>
    <br>
    <img src="./images/alert_example.png" alt="script例">
    <br>
    <form method="POST" action="./test1_res.php">
       <input type="text" name="data"/>
       <input type="submit" value="送信"/>
   </form>
</body>
<br>
<a href="http://18.181.193.86/xss_aws/start.php"><h2>戻る</h2></a>
</html>

