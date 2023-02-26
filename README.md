# Multiple Database Connection in Laravel

This projects demostrates how to use multiple database connection in Laravel.

## Installation

- Clone the repository
```bash
git clone https://github.com/phi-rakib/laravel-multiple-database-connection.git
```

- Move to the laravel-multiple-database-connection directory
```bash
cd laravel-multiple-database-connection
```

- Install the dependencies
```bash
composer install
```
- Create database
- Copy the environment file
```bash
cp .env.example .env
```
- Change database configuration values in the environment file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-db-user-name
DB_PASSWORD=your-db-password
```
- Run migration
```bash
php artisan migrate
```
- Start local development server
```bash
php artisan serve
```