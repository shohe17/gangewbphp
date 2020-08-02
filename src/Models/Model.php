<?php
//$thisはこのクラスの伊bsy田b酢「
//プロパティはクラスの中の変数
//メソッドはクラスの中の関数
//->の左がわにはインスタンスが必ず入る
//どのテーブルにも共通する処理を書く場所
//データベース読み込み
require_once('dbconnect.php');
//modelクラスを指定
class Model 
{
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
    //モデルクラスのインスタンスのdb_managerプロパティに、dbmanagerクラスのインスタンスを代入
    //newdbmanagerは設計図をもとに操作するものを作っている、作ったものをdb_managerに代入納車
    $this->db_manager = new DbManager();
    //dbmanagerプロパティをDbManagerにつないでいる
    $this->db_manager->connect();

  }

  //dbの中身から全てのデータゲットするメソッド
  public function getAll()
  {
    //$stmtに右を代入
    //prepare関数で読み込むデータを準備
    //tableの全体から読み込む  
    //$this->tableの意味は？tableを利用するからtableプロパティに指定するのはなんとなくわかる 
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' ORDER BY created_at DESC');
    //準備したSQLを実行
    $stmt->execute();
    //実行データを全て読み込む
    $posts = $stmt->fetchAll();
    //戻り値
    return $posts;
  }

  //dbの中からuser_idを読み込みむメソッドを指定する
  public function findById()
  {

    //User_idでデータを読み込む準備をする
    
    $stmt = $this->db_manager->dbh->prepare('SELECT * FROM' . $this->table . ' WHERE user_id = ?');
    
    //実行
    $stmt->execute();
    //実行した値を表示する
    $posts =  $stmt->fetchAll();
    //表示する値を引数に返す
    return $posts;

  }
    //フォローボタン
    //いいねボタン
     //コメントボタン
}










