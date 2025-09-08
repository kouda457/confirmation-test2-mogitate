#　もぎたて

##　環境構築
**Dockerビルド
1. DockerDesktopアプリを立ち上げる
2. Docker-compose up -d --build
3. .envに以下の環境変数を追加
``` text
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

4. マイグレーションの実行
``` bash
php artisan migrate
```

5. シーディングの実行
``` bash
php artisan db:seed
```


##　使用技術（実行環境）
- PHP8.4.6
- laravel8.83.29
- mysql11.8.2

##　ER図
<img src="mogitateER図.drawio.png" alt="ER図" width="60%>

##　URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/
#confirmation-test2-mogitate
