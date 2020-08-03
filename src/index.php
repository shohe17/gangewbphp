<?php
//一覧表示
//ファイル読み込み
require_once('Models/Post.php');

//$postにインスタンスを代入
$post = new Post();
//$postsはgetall


$posts = $post->getAll(); 


//オブジェクトにユーザー名を配置
//オブジェクトにタイトル配置
//オブジェクトに画像を配置
//オブジェクトのIDをhiddenにする
//画像クリックで拡大する機能
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
    <h1>トップページ</h1>
    <!-- タイトル表示 -->
    <!-- 画像表示 -->
    <div class="row p-3">
    <a href="posts/create.php">新規投稿</a>

           <!-- 先頭のデータから順に繰り返し -->
           <?php foreach ($posts as $post) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 py-3 py-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><?php echo $post['title'];?></h3>
                    <!-- dbにはいってるパスを指定したい -->
                    <img src="<?php echo $post['image_at'];?>" class="card-img-top" alt="...">
                  </div>
                  <a href="posts/edit.php?id=<?php echo $post['id']; ?>">編集</a>
                  <form action="posts/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                    <button type="submit">削除</button>
                  </form>
                </div>
            </div>
          <?php endforeach;?>
        </div>

</body>
</html>