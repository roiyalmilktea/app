<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			
		<title>登録</title>
	</head>
<body>
<?php
$user='root';
$pass='root';
$name = $_POST['name'];
$detail  = $_POST['detail'];

    try{
      $pdo = new PDO('mysql:dbname=testdb;host=172.27.0.2',$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch (PDOException $e) 
    {
      echo "DB接続に失敗しました。\n";
      echo $e->getMessage() . "\n";
      exit;
    }try{
      $sql ="INSERT INTO tasklist VALUES ('$name','$detail')";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();
      $name = $_REQUEST['name'];
      $detail  = $_REQUEST['detail'];


    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
    try{
      $sql = "SELECT * FROM testdb.tasklist";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();

    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
?>
<table><tbody>
    <tr><th>名前</th><th>詳細</th></tr>
    <?php
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
    ?>
      <tr>
        <th><?=($row['name'])?></th>
        <th><?=($row['detail'])?></th>
    </tr>
    <?php
        }
        $pdo = null;
    ?>
    </tbody></table>
      </body>
  </html>


<p>登録が完了しました。<br />
<div style="padding: 15px;"></div>
データベースに格納したスクリプトを実行するために「確認する」へ移動<br><a href="http://localhost:8080/vulune/xss2_res.php"><h2>確認する<h2></a></p></br>
<a href="http://localhost:8080/secure/xss2_review.php">実行後、解説</a>
</body>
</html>