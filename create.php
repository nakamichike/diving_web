<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>展覧会の作成</title>
    <link rel="stylesheet" href="create.css">
  </head>
  <body>
    <div id="wrapper" >
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
          <input type="text" name="main-title" value="展覧会のタイトル">
          <div class="content">
            <input type="text" name="title-1" value="写真のタイトル">
            <input type="file" name="img-1" value="">
            <input type="text" name="text-1" value="説明文を書いてください">
          </div>
          <div class="content">
            <input type="text" name="title-2" value="写真のタイトル">
            <input type="file" name="img-2" value="">
            <input type="text" name="text-2" value="説明文を書いてください">
          </div>
          <div class="content">
            <input type="text" name="title-3" value="写真のタイトル">
            <input type="file" name="img-3" value="">
            <input type="text" name="text-3" value="説明文を書いてください">
          </div>
          <div class="content">
            <input type="text" name="title-4" value="写真のタイトル">
            <input type="file" name="img-4" value="">
            <input type="text" name="text-4" value="説明文を書いてください">
          </div>
          <input type="submit" value="展示する">
        </form>
      </div>
    </div>
  </body>
</html>