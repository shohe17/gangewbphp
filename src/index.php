<?php
//一覧表示
//データ読み込み
require_once('Model.php');

// $id = $_POST['id'];
// $title = $_POST['title'];
// $picture = $_POST['picture'];

//$postにインスタンスを代入
$post = new Post();
//検索する画面の処理
//issetは変数に値が入っているかどうか確認する関数
//もし受け取った変数GETに値titleがはいってた場合{}の内側を処理
if(isset($_GET['title'])){
  $title = $_GET['title'];
  $posts = $post->findByTitle(["%$title%"]);
} else {
  //値が入っていない場合
  $posts = $post->getAll();
}

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
</body>
</html>