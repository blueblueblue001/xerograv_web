Laravel Expansion Side-A Day2

実施したこと：xerograv_webアプリを新たに作成し、DAY1, DAY2の工程をすべて再度実施。
TweetをDivelogに変更した。

認証の外に aboutページを追加し、xerogravの紹介ページを作成。Webで　/aboutに来た時に about.blade.phpが表示されるように設定。
strage配下の画像が読み込めないため、Dockerコンテナ内でstrage linkを実行する必要があることがわかった。
docker-compose exec laravel.test php artisan storage:link
で表示されるようになった。