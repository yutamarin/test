<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
 </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=form1;host=localhost;","root","mysql");
        $stmt = $pdo->query("select * from diworks_keijiban");
        
        ?>
        
        <div class="logogazou">
         <img src="diblog_logo2.jpg">
        </div>
        
        <ul div class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        
        <main>
            <div class="main-menu">
                <div class="left">
                    <h2>プログラミングに役立つ掲示板</h2>
                    <form method="post" action="insert.php">
                        <h3>入力フォーム</h3>
                        <div>
                            <lavel>ハンドルネーム</lavel><br>
                            <input type="text" class="text" size="30" name="handlename"></div>
                        <div>
                            <lavel>タイトル</lavel><br>
                            <input type="text" class="text" size="30" name="title"></div>
                        <div>
                            <lavel>コメント</lavel><br>
                            <textarea name="comments" rows="7" cols="50"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                    
                    <?php
                    
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments']; 
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
                
                <div class="right">
                    <h3>人気の記事</h3>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP Myadminの使い方</li>
                        <li>いま人気のエディタTops</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    <h3>オススメリンク</h3>
                    <ul>
                        <li>ディーアイワークス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                    <h3>カテゴリ</h3>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>
        
        <footer>
         Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
        </footer>