<?php

// ユーザーにデータを一時的に保存する鍵を渡す
session_start();

$_SESSION = [];
// セッションに登録された全てのデータを
session_destroy();

// リダイレクト
header('location: signinForm.php');
exit;