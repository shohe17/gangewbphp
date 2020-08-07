<?php
//自分が投稿したデータの表示（home.php)
//1. DBのデータを読み込み
 // a. DB接続   
  //b, SQL(SELECT)を実行(一覧表示のtitle,image_at,user_at,created_atを読み込む)
//2. 一覧表示
 // a. getAll fetchAll
//ファイル読み込み
require_once(__DIR__ .'/../Models/Post.php');

//そもそもこの変数はuser_idにしないといけないが、user_idはGETで送られてこない
$id = $_GET['id'];

//インスタンス生成 IDで見つける
//idで見つける関数をもったインスタンスを作成
$task = (new Post())->findById;



//表示したいデータ読み込み

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top | Gangサイト</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/app.js" defer></script>
</head>
<body>
    <h1>マイページ</h1>
    <!-- タイトル表示 -->
    <!-- 画像表示 -->
    <div class="row p-3">
           <!-- 先頭のデータから順に繰り返し -->
           <?php foreach ($posts as $post) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 py-3 py-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'];?></h5>
                  </div>
                    <!-- dbにはいってるパスを指定したい -->
                    <img src="<?php echo $post['image_at'];?>" class="card-img-top" alt="...">
                  <div>
                    <a href="edit.php">編集</a>
                    <button type="submit">削除</button>
                  </div>
                    
                </div>
            </div>
          <?php endforeach;?>
        </div>

</body>
</html>