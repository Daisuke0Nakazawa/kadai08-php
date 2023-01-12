<?php

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更


//1. POSTデータ取得
$name   = $_POST['name'];
$quiz1  = $_POST['quiz1'];
$quiz2    = $_POST['quiz2'];
$quiz3 = $_POST['quiz3'];
$quiz4 = $_POST['quiz4'];
$quiz5 = $_POST['quiz5'];


//2. DB接続します
//*** function化する！  *****************
try {
    $db_name = 'gs_db'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare(
                          'UPDATE
                        gs_task_quiz SET name= :name,quiz1=:quiz1 , quiz2=:quiz2 , quiz3=:quiz3 , quiz4=:quiz4,quiz5=:quiz5
                        WHERE name=:name;');
                     


// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':quiz1', $quiz1, PDO::PARAM_STR);
$stmt->bindValue(':quiz2', $quiz2, PDO::PARAM_STR); 
$stmt->bindValue(':quiz3', $quiz3, PDO::PARAM_STR);
$stmt->bindValue(':quiz4', $quiz4, PDO::PARAM_STR); 
$stmt->bindValue(':quiz5', $quiz5, PDO::PARAM_STR); 


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
