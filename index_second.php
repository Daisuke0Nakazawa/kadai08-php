<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <form action="insert_second.php" method="post">
      <H1>野球観戦日記</H1>
      <a class="navbar-brand" href="select_second.php">観戦日記を見る</a>
        <div class="wrap">
           <input type="date" name="date">
            <select name="team" id="team">
                <option value="未選択">未選択</option>
                <option value="ヤクルト">ヤクルト</option>
                <option value="横浜DeNA">横浜DeNA</option>
                <option value="阪神">阪神</option>
                <option value="巨人">巨人</option>
                <option value="広島">広島</option>
                <option value="中日">中日</option>
                <option value="オリックス">オリックス</option>
                <option value="ソフトバンク">ソフトバンク</option>
                <option value="西武">西武</option>
                <option value="楽天">楽天</option>
                <option value="ロッテ">ロッテ</option>
                <option value="日本ハム">日本ハム</option>
            </select>
            <p>vs</p>
            <select name="enemy" id="enemy">
                <option value="未選択">未選択</option>
                <option value="ヤクルト">ヤクルト</option>
                <option value="横浜DeNA">横浜DeNA</option>
                <option value="阪神">阪神</option>
                <option value="巨人">巨人</option>
                <option value="広島">広島</option>
                <option value="中日">中日</option>
                <option value="オリックス">オリックス</option>
                <option value="ソフトバンク">ソフトバンク</option>
                <option value="西武">西武</option>
                <option value="楽天">楽天</option>
                <option value="ロッテ">ロッテ</option>
                <option value="日本ハム">日本ハム</option>
            </select>
            <p>球場</p>
            <input type="text" name="location">
            <p>結果</p>
            <select name="result" id="result">
                <option value="未選択">未選択</option>
                <option value="勝ち">勝ち</option>
                <option value="負け">負け</option>
                <option value="引き分け">引き分け</option>
            </select>
        </div>
        <div class="detail">
            <p>詳細</p>
            <input type="text" name="link">
            <p>参照</p>
            <a href="https://baseball.yahoo.co.jp/npb/schedule/">スポナビ</a>
        </div>
        <input type="submit" value="送信">
    </form>
</body>
</html>