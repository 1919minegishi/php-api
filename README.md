# php-api
php-apiのdockerコンテナ入る。
composer create-porject laravel/laravel php-api

cd php-api
composer require api-platform/laravel
php artisan api-platform:install

## 動作確認
http://localhost:8080/api

