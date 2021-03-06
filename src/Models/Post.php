<?php
//ポストテーブルに関連する処理をするためのクラス
//Modelファイルw読み込み
require_once('Model.php');
//クラス指定
//modlphpを継承している
class Post extends Model
{

  //プロパティ指定
  protected $table = 'posts';
  //createメソッド指定
  public function create($data)
  { 
      // INSERT INTO (カラム名, ,) VALUES (値, 値, 値,)
      //データ挿入処理を準備 
      $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(title, user_id, image_at, created_at, updated_at) VALUE(?, ?, ?, ?, ?)');
      
      //実行
      $stmt->execute($data);
    
  }

  //postのタイトル名で見つけるメソッド指定
  public function findByTitle($data)
  {
    //処理を準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM' . $this->table . ' WHERE title LIKE ?');
    //実行
    $stmt->execute($data);
    //画面に表示する
    $posts = $stmt->fetchAll();
    //戻り値
    return $posts;

  }

  public function update($data)
  {
    $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET title = ? WHERE id = ?');
    $stmt->execute($data);
  }



  //画像を選択するメソッド

  //保存されたタスクの更新するメソッド

  //保存データからタイトルで探すメソッド

}
