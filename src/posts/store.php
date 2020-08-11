<?php
//保存処理画面では
//ファイル読み込み
require_once(__DIR__ .'/../Models/Post.php');
//db接続
//タイトルデータを受け取りz
$file = $_FILES['image']['tmp_name'];
$title = $_POST['title'];
//投稿日データを受け取り
$currentTime = date("Y-m-d H:i:s");   
$user_id = 1;
$update_at = date("Y-m-d H:i:s");   

if ($_FILES['image']['error'] !== 4) {
  $image_at = '/images/posts/' . $_FILES['image']['name'];
  // 画像の保存
  // 第一引数が対象のファイル、第2引数が保存先
  move_uploaded_file($file,  '../images/posts/' . $_FILES['image']['name']);
// そうでなければ(画像がアップロードされていない場合)
} else {
  $image_at = "/images/posts/default.jpg";
}


//Postクラスのインスタンスを$postに代入
$post = new Post();
//新規投稿画面から受け取ったデータをdbに挿入
$post->create([$title, $user_id, $image_at, $currentTime, $update_at]);

//一覧表示ページに戻す
header('location: /index.php');
exit;



//編集日データを受け取る
