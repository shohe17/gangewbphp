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
  <title>Top | Gangサイト</title>
  <link rel="stylesheet" href="./assets/css/reset.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- JQuery -->
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script defer src="./assets/js/app.js"></script>
</head>
<body>
  <div class="container" sryle="height:1300px;">
    <div class="row mt-5 pt-5">
      <?php include(__DIR__ . '/../components/Header.php'); ?>
      <h2 class="col-12 text-info">投稿の編集</h2>
      <br>
      <br>
      <br>
      <form action="update.php" method="post">
        <div>
          <label for="title">君の新しいジョジョ立ちのタイトルは</label>
          <input type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
        </div>
        <div>
          <img src="<?php echo $post['image_at'];?>" class="card-img-top" alt="...">
          <input type="file" id="image_at">
          <label for="image_at"></label>
        </div>
        <div>
          <input name="id" type="hidden" value="<?php echo $post['id']; ?>">
          <button type="submit" class=" btn btn-info">送信する</button>
        </div>
      </form>
    </div>
</body>

