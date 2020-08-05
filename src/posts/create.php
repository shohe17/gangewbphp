
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
  <a href="/" class="col-12">画像一覧へ</a>
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

