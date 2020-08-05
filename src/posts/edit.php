<?php

//ファイル読み込み
require_once(__DIR__ .'/../Models/Post.php');
//編集対象のデータ受け取り(dbから？)
$id = $_GET['id'];
//左にpostクラスのインスタンスを代入（）
$post = (new Post())->findById($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <h3>画像アップロード</h3>
  <a href="/" class="col-12">画像一覧へ</a>
  <form action="update.php" method="post">
    <div>
      <label for="title">ジョジョ立ちのタイトル</label>
      <input type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
    </div>
    <!-- 検索、投稿日を自動で出力 -->
    <!-- <div>
      <label for="created_at">created_at</label>

    </div> -->
    <div>
    <img src="<?php echo $post['image_at'];?>" class="card-img-top" alt="...">
      <input type="file" id="image_at">
      <label for="image_at">ファイルを選択</label>
    </div>
    <div>
      <input name="id" type="hidden" value="<?php echo $post['id']; ?>">
      <button type="submit">送信</button>
    </div>
  </form>
</body>

