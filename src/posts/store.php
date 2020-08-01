<?php
//保存処理画面では
//ファイル読み込み
require_once(__DIR__ .'/../Models/Post.php');
//db接続
//タイトルデータを受け取り
$title = $_POST['title'];
//投稿日データを受け取り
$currentTime = date("Y-m-d H:i:s");   
$user_id = 1;
$image_at = "/images/posts/default.jpg";
$update_at = date("Y-m-d H:i:s");   

//Postクラスのインスタンスを$postに代入　
$post = new Post();
//新規投稿画面から受け取ったデータをdbに挿入
$post->create([$title, $user_id, $image_at, $currentTime, $update_at]);

//一覧表示ページに戻す
header('location: /index.php');
exit;



//編集日データを受け取る
