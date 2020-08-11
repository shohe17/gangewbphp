<?php

// データ読み込み
require_once(__DIR__ .'/../Models/users.php');

// データ受け取り
$email = $_POST['email'];
$password = $_POST['password'];
$image_at = 1;
$follower_id = 1;

// パスワードを暗号化
$hashPass = password_hash($password, PASSWORD_BCRYPT);

// Userクラスのインスタンス生成（インスタンス化）
$user = new User();

// ユーザーデータを保存
$user->create([$email, $hashPass, $image_at, $follower_id]);
// 登録したユーザーデータを取得
$newUser = $user->findByEmail([$email]);

// セッション開始
session_start();
// セッションにログイン情報登録
$_SESSION['user'] = $newUser;

// リダイレクト
header('location: /');
exit;
