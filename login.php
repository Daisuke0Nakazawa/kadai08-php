<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
       .login{
        margin-left: 200px;
        width: 600px;
        height: 400px;
        text-align: center;
        background-image: url(./img/jingu.jfif);
       }
       .login p{
        padding: 70px 0px;
        font-size: 30px;
       }
    </style>

</head>
<body>
    <div class="login">
        <p>ログインするよ</p>
        <form name="form1" action="login_act.php" method="post">
            ID:<input type="text" name="lid" />
            PW:<input type="password" name="lpw" />
        <input type="submit" value="ログイン" />
    </form>

    </div>
</body>
</html>