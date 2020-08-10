<?php

// ファイル読み込み
require_once(__DIR__ .'/../Models/users.php');

// データ受け取りemailとpassword
$email = $_POST['email'];
$password = $_POST['password'];

// emailで探し出す顔数処理の呼び出し
$user = new User();
$loginUser = $user->findByEmail([$email]);

// 入力されたメールアドレスが存在しない場合
// emailが間違っている場合signinForm.phpに戻す
if (!$loginUser) {
  header('location: signinForm.php');
  exit;
}

// emailが正しく、パスワードが間違っている場合signinForm.phpに戻す
if (!password_verify($password, $loginUser['password'])){
  header('location: signinForm.php');
  exit;
}

// 両方正しい場合index.phpに移動
if (password_verify($password, $loginUser['password'])) {
  // ログイン情報をセッションに保存
  session_start();
  $_SESSION['user'] = $loginUser;
  
  header('Location: /../index.php');
  exit;
}

