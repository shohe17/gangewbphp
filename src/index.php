<?php

session_start();

$user = $_SESSION['user'] ?? [];

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
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info text-white scrolling-navbar">
            <a class="navbar-brand" href="/"><strong>ホームページ</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">マイページ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts/create.php">投稿ページ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">プロフィール設定ページ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/signout.php">ログアウト</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <span class="text-light mr-5">ログインアドレス：
                          <?= $user['email'] ?? 'ログインユーザーのメールアドレス' ?>
                        </span>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
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