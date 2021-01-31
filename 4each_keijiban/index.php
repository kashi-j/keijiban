<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php
      mb_internal_encoding("utf8");
      $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
      $stmt = $pdo->query("select * from 4each_keijiban");
    
      // while($row=$stmt->fetch()){
      //   echo $row['handlename'];
      //   echo $row['title'];
      //   echo $row['comments'];
      // }

    ?>

      <div class="logo">
        <img src="./4eachblog_logo.jpg" alt="「ロゴ」のイメージです">
      </div>
      <header>
        <ul>
          <li><a href="#">トップ</a></li>
          <li><a href="#">プロフィール</a></li>
          <li><a href="#">4eachについて</a></li>
          <li><a href="#">登録フォーム</a></li>
          <li><a href="#">問い合わせ</a></li>
          <li><a href="#">その他</a> </li>
        </ul>
      </header>
      <main>
        <div class="main-container">
          <div class="left">
            <div class="keijiban">
              <h2>プログラミングに役立つ掲示板</h2>
            </div>

            <form method="post" action="insert.php">
              <h1>入力フォーム</h1>
              <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
              </div>
              <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
              </div>
              <div>
                <label>コメント</label>
                <br>
                <textarea class="textarea" col="35" row="7" name="comments"></textarea>
                <br>
              </div>
              <div>
                <input type="submit" class="submit" value="投稿する">
              </div>
            </form>
            <form >
              <?php
                while($row=$stmt->fetch()){
                echo "<div class='kiji'>";
                  echo "<h3>".$row['title']."</h3>";
                  echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                  echo "</div>";
                echo "</div>";
                }
              ?>
          </form>

        </div>
        <div class="right">
          <h3>人気の記事</h3>
            <ul>
              <li><a href="#">PHPオススメ本</a></li>
              <li><a href="#">PHP MyAdminの使い方</a></li>
              <li><a href="#">今人気のエディタ Top5</a></li>
              <li><a href="#">HTMLの基礎</a></li>
            </ul>
          <h3>オススメリンク</h3>
            <ul>
              <li><a href="#">インターノウス株式会社</a></li>
              <li><a href="#">XAMPPのダウンロード</a></li>
              <li><a href="#">Eclipseのダウンロード</a></li>
              <li><a href="#">Bracketsのダウンロード</a></li>
            </ul>
          <h3>カテゴリ</h3>
            <ul>
              <li><a href="#">HTML</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">MySQL</a></li>
              <li><a href="#">JavaScript</a></li>
            </ul>
        </div>
      </div>
    </main>
    <footer>
      copyright © internous ｜4each blog the which provides A to Z about programming.
    </footer>
  </body>
</html>