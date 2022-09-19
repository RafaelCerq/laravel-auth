# Laravel-auth
# PHP 8^
# Laravel 9^

## 🛠️ Configurações para rodar projeto
- copy .env.example .env
- php artisan key:generate
- Configurar .env
    - configurações Mysql
    - configurações E-mail
    - configurações queue = database;
- composer install
- npm install
- npm run dev
- npm run build
- php artisan migrate
- php artisan storage:link


# Processo de criação do projeto:
- composer create-project --prefer-dist laravel/laravel laravel-auth

# Instalar Breeze (Caso o clone o projeto, apenas execute npm install e migrate ):
- composer require laravel/breeze --dev
- php artisan breeze:install
- npm install
- php artisan migrate
- npm run dev

# Criando Middleware
- php artisan make:middleware Lang
