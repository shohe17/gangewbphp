<?php

// ファイル読み込み
require_once('Model.php');


// クラス指定
class User extends Model
{
  // プロパティ定義
  protected $table = 'users';

  // データ追加処理
  public function create($data)
  { 
      // INSERT INTO (カラム名, ,) VALUES (値, 値, 値,)
      //データ挿入処理を準備 
      $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . '(email, password, created_at, image_at, follower_id) VALUE(?, ?, now(), ?, ?)');
      //実行
      $stmt->execute($data);
  }

  //emailでuserを見つける関数を準備
  public function findByEmail($data)
  {
    //処理を準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE email = ?');
    //実行
    $stmt->execute($data);
    //結果を取得
    $user = $stmt->fetch();
    //戻り値
    return $user;

  }


}













