<?php

//1. POSTデータ取得
$name   =filter_input(INPUT_POST,'name');
$quiz1  = filter_input(INPUT_POST,'quiz1');
$quiz2    = filter_input(INPUT_POST,'quiz2');
$quiz3 = filter_input(INPUT_POST,'quiz3');
$quiz4 = filter_input(INPUT_POST,'quiz4');
$quiz5 = filter_input(INPUT_POST,'quiz5');


//2. DB接続します
//*** function化する！  *****************

require_once('funcs.php');
$pdo=db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
                        gs_task_quiz(
                            name, quiz1, quiz2, quiz3, quiz4,quiz5
                            )
                        VALUES (
                            :name, :quiz1, :quiz2, :quiz3,:quiz4,:quiz5
                            );'
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':quiz1', $quiz1, PDO::PARAM_STR);
$stmt->bindValue(':quiz2', $quiz2, PDO::PARAM_STR); //PARAM_INTなので注意
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
    header('Location: result.php');
    exit();
}
