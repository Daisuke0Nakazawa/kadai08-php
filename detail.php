<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
$name = $_GET['name'];

require_once('funcs.php');
$pdo=db_con();

$stmt = $pdo->prepare('SELECT * FROM gs_task_quiz WHERE name=:name;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //PARAM_INTなので注意
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    // データが取得できた場合の処理
   $result = $stmt->fetch();
}
?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>詳細</legend>
                <label>名前：<input type="text" name="name" value="<?= $result['name']?>"></label><br>
                <label>Q1：<input type="text" name="quiz1" value="<?= $result['quiz1']?>"></label><br>
                <label>Q2：<input type="text" name="quiz2" value="<?= $result['quiz2']?>"></label><br>
                <label>Q3：<input type="text" name="quiz3" value="<?= $result['quiz3']?>"></label><br>
                <label>Q4：<input type="text" name="quiz4" value="<?= $result['quiz4']?>"></label><br>
                <label>Q5：<input type="text" name="quiz5" value="<?= $result['quiz5']?>"></label><br>

                <input type="submit" value="修正">
                <input type="hidden" name="name" value="<?= $result['name']?>"><br>

            </fieldset>
        </div>
    </form>
</body>
</html>