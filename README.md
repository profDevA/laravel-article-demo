# Laravel Assetsment

## What I have done

I created a new Laravel 9 project and implemented REST API to add new Article data, retrieve articles with pagination and retrieve a single article with a temporary image URL.
And created a cron job that deletes articles older than 30 days every hour.
## Prerequisites

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)

## Set up project

### 1. Clone the git repository

```bash
git clone https://github.com/profDevA/laravel-article-demo.git
```

### 2. Install packages

```bash
composer install
```

### 3. Create .env file

```bash
cp .env.example .env
```

Please set database name, database user and password in `.env` file.

### 4. Generate App key

```bash
php artisan key:generate
```

### 5. Create tables

```bash
php artisan migrate
```

## Run API server

```bash
php artisan serve
```

This command will run the server on http://localhost:8000

## Run scheduler (for delete old articles)

### Run the scheduler locally

```bash
php artisan schedule:work
```

### Run the scheduler on remote server

If you deploy your app on remote server, you can run it as follows

```bash
 cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

## API endpoints

| Type | Endpoint | Description
| ------------- | ------------- | -------------
| GET\|HEAD | /api/article | Get articles with pagination (10 items)
| POST | /api/article | Create and save a new article record from inputs. Upload an image in private folder.
| GET | /api/article/{article} | Get a single article with temporary image URL.

