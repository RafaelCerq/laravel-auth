# Laravel-auth
# PHP 8^
# Laravel 9^

## 🛠️ Configurações para rodar projeto
- composer install
- npm install
- copy .env.example .env
- php artisan key:generate
- Configurar .env
    - configurações banco de dados
    - Em caso de utilizar sqlite, crie o arquivo "database.sqlite" dentro do diretório "database". Obs: ao executar apenas o migrate, será solicitado criação do BD
- npm run dev
- pare execução do npm
- npm run build
- composer dump-autoload
- php artisan storage:link
- php artisan migrate
- php artisan db:seed
- php artisan serve


# Acesso:
- Ao executar a configuração, inicie o projeto com comando: php artisan serve
- Utilize os dados para acessar o sistema: admin@mail.com, senha: 12345678



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
