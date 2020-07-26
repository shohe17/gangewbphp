<?php 


$host = "db";
$dbname = "gangphp";
$charset = "utf8mb4";
$user = "root";
$password = "secret";
$options = [
  //PDOはデータベースに接続するときにつかう
  //SQLでエラーが表示されたときに画面に表示するようにする
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXEPTION,
  //DBから取得したデータの配列を連想配列の形式で取得する
  PDO::ATTR_DEFAULT_FETCH_MOOD => PDO::FETCH_ASSOC,
  //SQLのイジェクション対策
  PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
  $dsn = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
  var_dump($e->getMessage());
  exit;
}