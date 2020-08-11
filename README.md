# Gangの紹介サイト

## 作成した経緯

## 機能一覧
- 画像投稿機能
- 画像が投稿されていない場合はデフォルト画像をDBに保存
- 投稿内容の編集機能
- 投稿の削除機能
- 認証機能
## 画面遷移図

## ER図

## 使用してる技術
- PHP7.3
- MySQL5.7
- Bootstrap

## 本番URL

## 環境構築手順

1. リポジトリをクローン
```
git clone https://github.com/shohe17/gangewbphp.git
```

2. dockerコンテナを起動
```
cd docker
docker-compose up —-build -d
```

3. 必要なライブラリのインストール
```
docker-compose exec php /bin/bash

composer install
```

4. ブラウザからアクセス
```
http://localhost:8090/
```

### その他
- phpmyadminを使用する場合
```
http://localhost:8889/
ID: root
PW: secret
```

- docker停止
```
cd docker
docker-compose down
```

- ライブラリの導入
  1. phpのコンテナに入る
  ```
  docker-compose exec php /bin/bash
  ```

  2. composerを使用してインストール
  ```
  composer require {Owner/Library}
  ```
