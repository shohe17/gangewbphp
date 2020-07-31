<?php
//保存処理画面では
//ファイル読み込み
require_once('Models/Post.php');
//db接続
//タイトルデータを受け取る
$title = $_POST['title'];
//投稿日データを受け取る
$currentTime = date("Y/m/d H:i:s");

//新規投稿画面から受け取ったデータをdbに挿入
$post = new Post();
//実行したい処理を変数名に代入？？
$post->create([$title, $currentTime]);

//一覧表示ページに戻す
header('location: index.php');
exit;



//編集日データを受け取る
