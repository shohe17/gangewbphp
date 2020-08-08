<?php
 //ファイル読み込み
 require_once(__DIR__ .'/../Models/Post.php');

 //データ受け取り
$id = $_GET['id'];
//インスタンス生成
$post = new Post();
 //db接続
$post->delete([$id]);

 //リダイレクト
 header('location: /');
 exit;
 