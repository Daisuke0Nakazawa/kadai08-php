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
} 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/result.css">
    

</head>
<body>

    <div class="title">
        <h1>クイズ結果</h1>
    </div>

    <div class="result">
        <table>
            <th></th>
            <td></td>
            <td>あなたの回答</td>
            <td>模範解答</td>
        </table>
        <table>
            <th>Q1</th>
            <td id="quiz1"></td>
            <td id="quiz1user"><?= $quiz1 ?></td>
            <td id="quiz1answer">きゅうり</td>
        </table>
        <table>
            <th>Q2</th>
            <td id="quiz2"></td>
            <td id="quiz2user"><?= $quiz2 ?></td>
            <td id="quiz2answer">東京ヤクルトスワローズ</td>
        </table>
        <table>
            <th>Q3</th>
            <td id="quiz3"></td>
            <td id="quiz3user"><?= $quiz3 ?></td>
            <td id="quiz3answer">NMB48</td>
        </table>
        <table>
            <th>Q4</th>
            <td id="quiz4"></td>
            <td id="quiz4user"><?= $quiz4 ?></td>
            <td id="quiz4answer">青森県</td>
        </table>
        <table>
            <th>Q5</th>
            <td id="quiz5"></td>
            <td id="quiz5user"><?= $quiz5 ?></td>
            <td id="quiz5answer">O型</td>
        </table>
    </div>

    <p><a href="main.php">HPへ戻る</a></p>
    <p><a href="select.php">みんなの解答を見る</a></p>
    



        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script >
        let q1_user = document.getElementById("quiz1user");
        let q1_answer = document.getElementById("quiz1answer");
        let q1 = "";

        if(q1_user==q1_answer){
            q1 = "〇"
        }else{
            q1 = "×"
        };

        $("#quiz1").html(q1);

        let q2_user = document.getElementById("quiz2user");
        let q2_answer = document.getElementById("quiz2answer");
        let q2 = "";

        if(q2_user==q2_answer){
            q2 = "〇"
        }else{
            q2 = "×"
        };

        $("#quiz2").html(q2);

        let q3_answer = document.getElementById("quiz3answer");
        let q3 = "";
        let q3_user = document.getElementById("quiz3user");

        if(q3_user==q3_answer){
            q3 = "〇"
        }else{
            q3 = "×"
        };

        $("#quiz3").html(q3);

        let q4_user = document.getElementById("quiz4user");
        let q4_answer = document.getElementById("quiz4answer");
        let q4 = "";

        if(q2_user==q4_answer){
            q4 = "〇"
        }else{
            q4 = "×"
        };

        $("#quiz4").html(q4);

        let q5_user = document.getElementById("quiz5user");
        let q5_answer = document.getElementById("quiz5answer");
        let q5 = "";

        if(q5_user==q5_answer){
            q5 = "〇"
        }else{
            q5 = "×"
        };

        $("#quiz5").html(q2);
    </script>
</body>
</html>