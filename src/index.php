<?php
//ファイル１つづつに何をするファイルかコメントアウト
//ユーザーの投稿を表示するページ
//コンタクトフォームのギットハブ確認

//dbに接続
//sqlを実行
//実行した結果を変数に代入
//変数の内容を画面に表示



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
    <h1>トップページ</h1>
    <!-- タイトル表示 -->
    <!-- 画像表示 -->
    <div class="row p-3">
        <!-- 先頭のデータから順に繰り返し -->
        <?php foreach ($posts as $post) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 py-3 py-3">
                <div class="card">
                    <!-- dbにはいってるパスを指定したい -->
                    <img src="<?php echo $post['image_at']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>