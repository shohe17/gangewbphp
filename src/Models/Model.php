<?php
//一覧表示のページ

//データベース読み込み
require_once('dbconnect.php');
//modelクラスを指定
class Model {
  //Modelクラスにプロパティ（データ）定義
  protected $table; 
  protected $db_manager;

  //インスタンス化（new）したら呼び出されるメソッド指定
  //dbに接続するメソッド
  public function __construct()
  {
    // db_managerプロパティは、
    // DbManagerクラスのインスタンス DbManagerクラスはdbconnectで指定
    //メソッド内でインスタンスのプロパティやメソッドにアクセスしたい時は「$this」を変数にする
    $this->db_manager = new DbManager();
    //dbmanagerプロパティをDbManagerにつないでいる
    $this->db_manager->connect();

  }

  //dbから全てのデータゲットするメソッド
  public function getAll()
  {
    //$stmtに右を代入
    //prepare関数で読み込むデータを準備
    //tableの全体から読み込む  
    //$this->tableの意味は？tableを利用するからtableプロパティに指定するのはなんとなくわかる 
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' ORDER BY created DESC');
    //準備したSQLを実行
    $stmt->execute();
    //実行データを全て読み込む
    $posts = $stmt->fetchAll();
    //戻り値
    return $posts;



  }

  //dbからidで探すメソッド
  public function findById($id)
  {
    //見つける分を準備
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
    //実行
    $stmt->execute($id);
    //表示する
    $posts = $stmt->fetch();
    return $posts;
    //戻す
  }
    //フォローボタン
    //いいねボタン
    //コメントボタン
    
}










