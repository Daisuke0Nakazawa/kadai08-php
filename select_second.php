<?php
function h($str){
return htmlspecialchars($str,ENT_QUOTES);
}

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');

} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT *FROM gs_bm_table;");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // =だけだと最後の名前しか取得できない(上書きされるから).=だとそれが防げる
    $view .= '<p>' .h($result['date']).' '.h($result['team']) .'vs' .h($result['enemy'] .' @'.h($result['location'])).' '.h($result['result']).'  <a href="'.h($result['link']).'">'.'詳細</a>'.'</p>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index_second.php">観戦日記を更新する</a>
      <a href="main.php">HPに戻る</a>
      </div>
    </div>
  </nav>
  
</header>
<!-- Head[End] -->
<h1>野球観戦日記2022</h1>
<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
