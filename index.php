<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="logo"><img src=4eachblog_logo.jpg></div>
<header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
<main>
    <div class="left">
    <h1>プログラミングに役に立つ書籍</h1>
         <form method="post" action="insert.php">
         <div class="mainform">
            <h2>入力フォーム</h2>
                <div>
                    <lable>ハンドルネーム</lable>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <div>
                    <lable>コメント</lable>
                    <br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
        </div>
            <?php
                mb_internal_encoding("utf-8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                $stmt=$pdo->query("select * from 4each_keijiban");            
                    while($row = $stmt->fetch()){
                        echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                        echo "</div>";
                    }
            ?>
        </form>
        <!-- <div class="kiji">
            <h3>タイトル3</h3>
            <div class="contents">
                <div class="handlename"></div>
            </div>
        </div>     -->
    </div>
    <div class="right">
            <h1>人気の記事</h1>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHPMyAdminの使い方</li>
                <li>今人気のエディタ　Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h1>オススメリンク</h1>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h1>カテゴリー</h1>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Javascript</li>
            </ul>
    </div>
</main>
<footer>copyright@internous|4each blog the which provide A to Z about programming</footer>
</body>

 <!-- while($row = $stmt->fetch()){
     echo $row['handlename'];
     echo $row['title'];
     echo $row['comments'];
 } -->
<!-- <?php

echo "<div class='kiji'>";
echo "<h3>タイトル</h3>";
echo "<div class='contents'>";
echo "記事の中身<br>記事の中身<br>記事の中身";
echo "<div class='handlename'>posted by 通りすがり</div>";
echo "</div>";
echo "</div>";

?> -->
