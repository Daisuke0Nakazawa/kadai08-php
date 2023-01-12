<!-- delete fron テーブル名 where id =:id -->
<!-- whereがないと全部のデータが消えてしまうので注意 -->

<?php

//1. POSTデータ取得
$name = $_GET['name'];


//2. DB接続します
//*** function化する！  *****************
require_once('funcs.php');
$pdo=db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_task_quiz WHERE name=:name');
                          
$stmt->bindValue(':name', $name, PDO::PARAM_STR); 

$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}
