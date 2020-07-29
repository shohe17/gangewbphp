<?php
//一覧表示
//データ読み込み
require_once('Models/Post.php');

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

$dsn = "mysql:host=localhost; dbname=gangphp; charset=utf8mb4";
$username = "xxx";
$password = "xxx";
$id = rand(1, 5);
try {
  $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
}
  $sql = 'SELECT * FROM gangphp WHERE id = id';
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  $image = $stmt->fetch();
  

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