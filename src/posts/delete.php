<?php
 //ファイル読み込み
 require_once(__DIR__ .'/../Models/Post.php');

 //データ受け取り
$id = $_POST['id'];
 //インスタンス生成
$post = new Post();
 //db接続
$post->delete([$id]);

 //リダイレクト
 header('location: http://localhost:8090/index.php');
 exit;