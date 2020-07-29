<?php
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$username = "root";
$password = "secret";
try{
  $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
}
  //postされた値にuploadが入っていた場合
  if (isset($_POST['upload'])){
    $image = uniqid(mt_rand(), true);
    //アップロードされた拡張子のファイル取得
    $image .= '.' . substr(strrchr($_FILES['image']['name'], '.'), 1);
    $file = "images/$image";
    $sql = "INSERT INTO images(name) VALUES (:name)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':image', $image, PDO::PARAM_STR);
    //ファイルが選択されていれば$imageにファイルを代入
    if (!empty($_FILES['image']['name'])) {
      //imagesディレクトリにファイル保存
      move_uploaded_file($_FILES['image']['tmp_name'], './images/' . $image);
        if (exif_imagetype($file)){
          $message = '画像をアップロードしました';
          $stmt->execute();
        } else {
          $message = '画像ファイルではありません';
          }
       }
    }

?>


<h1>画像アップロード</h1>
<!--送信ボタンが押された場合-->
<!-- postされて値にuploadが入っていれば12行目を実行 -->
<?php if (isset($_POST['upload'])): ?>
    <p><?php echo $message; ?></p>
<!-- 入っていなければ15-19行目を実行 -->
<?php else: ?>
    <form method="post" enctype="multipart/form-data">
        <p>アップロード画像</p>
        <input type="file" name="image">
        <button><input type="submit" name="upload" value="送信"></button>
    </form>
<?php endif;?>