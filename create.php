<?php 
require('dbconnect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="utf-8">
<title>展覧会の作成</title>
<link rel="stylesheet" href="create.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
  <body>
      <header>
        <div class="header-logo">
          <h4>logo</h4>
          <ul>
            <li><a href="new_login.php">新規作成</a></li>
            <li><a href="#">ログイン</a></li>
            <li><a href="#">展覧会を開く</a></li>
            <li><i class="fas fa-search" id="open_nav"></i></li>
          </ul>
        </div>
      </header>
      <div class="contents">
        <form class="" action="create.php" method="post">
          <input type="text" name="main-title" placeholder="展覧会のタイトル">
          <?php 
            for ($i=1; $i < 5; $i++) { 
              echo "<div class=\"content\">";
              echo "<input type=\"text\" name=\"title-$i\" placeholder=\"写真のタイトル\" size=\"50px\">";
              echo "<input type=\"file\" name=\"img-$i\">";
              echo "<select name=\"season$i\">";
              echo "<option value=\"spring\">春</option>";
              echo "<option value=\"summer\">夏</option>";
              echo "<option value=\"autumn\">秋</option>";
              echo "<option value=\"winter\">冬</option>";
              echo "</select>";
              echo "<textarea  name=\"text-$i\" rows=\"4\" cols=\"40\" placeholder=\"説明文をあれば書いてください\" ></textarea>";
              echo "</div>";
            }
          ?>
          <input type="submit" value="展示する">
        </form>
      </div>
  </body>
</html>
