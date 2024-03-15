## TFT Blog

•	Author: Xu Teck Tan <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com/TXTEck/ServerSide_CA2_XuTeckTan.git
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
click on link in terminal to view page
```

## Before starting <br>
Create a database <br>
```
go to PhpMyAdmin
Create a database of any name
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={Your Database Name}
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Credits
Original Blog Design By: https://github.com/codewithdary/laravel-8-complete-blog
