<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <!-- ここから下にコードを書く -->
 <div class="container">
    <nav>
    
        <div class="header-wrapper">
        
            <div id="menu">
                <div>
                    <a href="#menu" class="menuopen">三</a><a href="#close" class="menuclose">×

                </div>
                
                <ul>
                        <li><a href="#PROFILE" class="click_space">プロフィール</a></li>
                        <li><a href="#COURSE" class="click_space"> SNS一覧</a></li>
                        
                        <li><a href="#ACCESS" class="click_space">アクセス</a></li>
                        <li><a href="#quuz" class="click_space">中澤クイズ</a></li>

                        <li><a href="#game" class="click_space">じゃんけん</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>



    <div class="topimg">
        <img src="./img/profile2.jpg" alt="">
    </div>

    <section id="#PROFILE">
        
        <div class="about_date">
            <h2>プロフィール</h2>

            <dl>
                <div class="access_inf">
                    <dt>名前</dt>
                    <dd>中澤　大輔</dd>
                </div>
                <div class="access_inf">
                    <dt>住所</dt>
                    <dd>〒145-0*** 東京都**区****1-36-9</dd>
                </div>
                <div class="access_inf">
                    <dt>TEL</dt>
                    <dd>080-4805-****</dd>
                </div>
               
                <div class="access_inf">
                    <dt>趣味</dt>
                    <dd>野球観戦</dd>
                    
                </div>

                <div class="access_inf">
                    <dt></dt>
                    <dd><a href="select_second.php">野球観戦日記2022を見る</a></dd>
                    
                </div>
        
            </dl>
            
        </div>

       
        
    </section>

    <!-- 注目選手 -->

    <section id="COURSE">
    
        <div class="sns_wrapper">
            <div class="sns">
                <h2>SNS一覧</h2>
                <th>instagram</th>
                <td><a href="https://www.instagram.com/">@naka_d_513</a></td>
                
            </div>
            
            </div>
        </div>
      
    
    </section>


            <!-- access -->

            <section id="ACCESS">
                <div class="access_wrapper">
                    <div class="access_title">
                        <h2>Access</h2>
                        <p>なかでぃー宅アクセス</p>
                        <a href="map.php">経路を調べる</a>
                        <p>↓※個人情報保護のため嘘です↓</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3241.065876695761!2d139.71587891525866!3d35.67537988019579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5piO5rK756We5a6u55CD5aC0!5e0!3m2!1sja!2sjp!4v1667307093069!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <dl>
                        
                            <div class="access_inf">
                                <dt>住所</dt>
                                <dd>〒107-0*** 東京都**区**1-36-9</dd>
                            </div>
                                                     
                            <div class="access_inf">
                                <dt>最寄り駅</dt>
                                <dd>東急東横線 **駅 徒歩8分
                                    
                                </dd>
                            </div>
                    
                        </dl>
                
                    </div>
                </div>
            </section>
            <section id="quiz">
                <h3 class="quiz-title">中澤クイズに挑戦！！</h3>
                <form method="POST"  action="result.php">
                  <div class="quiz-wrapper">
                    <fieldset>
                        <legend>5問クイズ</legend>
                        <dt>あなたのニックネーム</dt>
                        <dd><input type="text" name="name"></dd>
                        <label>Q1 私の最も嫌いな食べ物は？
                            <div class="quiz1">  
                             <input type="radio" name="quiz1" id="kyuuri" value="きゅうり"><br>
                             <label for="kyuuri">きゅうり</label>
                            </div>  
                            <div class="quiz1">  
                             <input type="radio" name="quiz1" id="tomato" value="トマト"><br>
                             <label for="kyuuri">トマト</label>
                            </div> 
                            <div class="quiz1">  
                             <input type="radio" name="quiz1" id="nasu" value="なす"><br>
                             <label for="kyuuri">なす</label>
                            </div> 
                        </label>   
                        <label>Q2 私の最も好きな野球チームは？
                            <div class="quiz1">  
                             <input type="radio" name="quiz2" id="giants" value="読売ジャイアンツ"><br>
                             <label for="giants">読売ジャイアンツ</label>
                            </div>  
                            <div class="quiz1">  
                             <input type="radio" name="quiz2" id="baystars" value="横浜DeNAベイスターズ"><br>
                             <label for="baystars">横浜DeNAベイスターズ</label>
                            </div> 
                            <div class="quiz1">  
                             <input type="radio" name="quiz2" id="swallows" value="東京ヤクルトスワローズ"><br>
                             <label for="swallows">東京ヤクルトスワローズ</label>
                            </div> 
                        </label>  
                        <label>Q3 中学生のときおに好きだったアイドルは？
                            <div class="quiz1">  
                             <input type="radio" name="quiz3" id="ske" value="SKE48"><br>
                             <label for="ske">SKE48</label>
                            </div>  
                            <div class="quiz1">  
                             <input type="radio" name="quiz3" id="nmb" value="NMB48"><br>
                             <label for="nmb">NMB48</label>
                            </div> 
                            <div class="quiz1">  
                             <input type="radio" name="quiz3" id="hkt" value="HKT48"><br>
                             <label for="hkt">HKT48</label>
                            </div> 
                        </label>   
                        <label>Q4 人生で行ったことない場所は？
                            <div class="quiz1">  
                             <input type="radio" name="quiz4" id="aomori" value="青森県"><br>
                             <label for="aomori">青森県</label>
                            </div>  
                            <div class="quiz1">  
                             <input type="radio" name="quiz4" id="gifu" value="岐阜県"><br>
                             <label for="gifu">岐阜県</label>
                            </div> 
                            <div class="quiz1">  
                             <input type="radio" name="quiz4" id="saga" value="佐賀県"><br>
                             <label for="saga">佐賀県</label>
                            </div> 
                        </label>  
                        <label>Q5 血液型は？
                            <div class="quiz1">  
                             <input type="radio" name="quiz5" id="a" value="A型"><br>
                             <label for="a">A型</label>
                            </div>  
                            <div class="quiz1">  
                             <input type="radio" name="quiz5" id="b" value="B型"><br>
                             <label for="b">B型</label>
                            </div> 
                            <div class="quiz1">  
                             <input type="radio" name="quiz5" id="o" value="O型"><br>
                             <label for="o">O型</label>
                            </div> 
                        </label>  
                        
                        <input type="submit" value="送信" class="quizsubmit">
                    </fieldset>
                  </div>
                </form>

            </section>
            
                <!-- じゃんけん -->
            
            <section id="game">
                <div class="game_wrapper">
                    <div class="game_title">
                        <h2>じゃんけん</h2>
                        <p>なかでぃーとじゃんけん</p>
                    </div>
                            
                </div>
                
                <div class="go_to_janken">
                   <p>※じゃんけん未作成</p>
                   
                </div>
                <div class="janken_logo">
                    <a href="index.html">
                    <img src="img/jankenlogo.JPG" alt="" width="300px">
                    </a>
                </div>
                
            </section>   
                
            <footer>
                <div class="foot">
                <a href="index.php">トップに戻る</a>
                <div class="navbar-header"><a  href="logout.php">ログアウト</a></div>

                </div>
                
            </footer>
    </div>           
                <!-- ここから上にコードを書く -->
                <!-- この中に記述していく -->
                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script src="js/main.js"></script>
 </body>
            
    
<script src="js/champion.js"></script>

   


</body>
</html>