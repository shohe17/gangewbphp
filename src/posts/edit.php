<?php

//ファイル読み込み
require_once('Models/Post.php');
//dbから編集対象のデータ受け取り
$title = $_POST['title'];
//受け取ったデータを画面に表示


// Aは一覧表示とほぼ一緒
// Bは新規作成とほぼ一緒
// store.phpは新規作成処理のためのファイルで更新処理のためのファイルで既に作ってるので分けた方がよいと思います。

// 更新画面の動きはTODOアプリと一緒なので、まずはそれを動かした方がよいかも。

// 1. gangの方のdockerとめる
// 2. Todoの方のdocker動かす
// でできると思うので

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <h3>画像アップロード</h3>
  <a href="index.php" class="col-12">画像一覧へ</a>
  <form action="store.php" method="post">
    <div>
      <label for="title">ジョジョ立ちのタイトル</label>
      <input type="text" name="title" id="title">
    </div>
    <!-- 検索、投稿日を自動で出力 -->
    <!-- <div>
      <label for="created_at">created_at</label>

    </div> -->
    <div>
      <input type="file" id="image_at">
      <label for="image_at">ファイルを選択</label>
    </div>
    <div>
      <button type="submit">送信</button>
    </div>
  </form>
</body>

