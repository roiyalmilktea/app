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
#脆弱だよー
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
      $sql ="INSERT INTO securelist VALUES ('$name','$detail')";
      $stmh = $pdo->prepare($sql);
      $stmh->execute();
      #脆弱だよー
      $name = $_POST ['name'];
      $detail  = $_POST['detail'];


    }catch(PDOException $Exception){
      die('接続エラー：' .$Exception->getMessage());
    }
    try{
      $sql = "SELECT * FROM testdb.securelist";
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


<p>登録が完了しました。<br /><a href="http://localhost:8080/conclude.php">まとめ</a></p>
</body>
</html>