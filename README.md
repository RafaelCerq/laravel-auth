# Laravel-auth
# PHP 8^
# Laravel 9^

# Processo de criação do projeto:
- composer create-project --prefer-dist laravel/laravel laravel-auth
- php artisan make:auth

# Instalar Breeze (Caso o clone o projeto, apenas execute npm install e migrate ):
- composer require laravel/breeze --dev
- php artisan breeze:install
- npm install
- php artisan migrate
- npm run dev