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
    <?php include(__DIR__ . '/components/Header.php'); ?>
    <main>
        <div class="container" style="height:1300px;">
            <div class="row mt-5 pt-5"> 
                <!-- 先頭のデータから順に繰り返し -->
                <?php foreach ($posts as $post) : ?>
                  <div class="col-lg-4 col-md-12">
                    <?php include(__DIR__ . '/components/Card.php'); ?>
                  </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>

                      <!-- <div class="col-sm-6 col-md-4 col-lg-3 py-3 py-3">
                        <div class="card">
                           -->
                            <!-- dbにはいってるパスを指定したい -->
                            <!-- <img src="<?php echo $post['image_at']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            </div>
                            <a href="posts/edit.php?id=<?php echo $post['id']; ?>">編集</a>
                            <form action="posts/delete.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                              <button type="submit">削除</button>
                            </form>
                        </div>
                    </div> -->