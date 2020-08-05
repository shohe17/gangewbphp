<?php
// ファイル読み込み
require_once(__DIR__ .'/../Models/Post.php');

// データ受け取り
$title = $_POST['title'];
$id = $_POST['id'];
// インスタンス生成
$post = new Post();
// 保存
$post->update([$title, $id]);

// リダイレクト理
header('location: /index.php');
exit;


