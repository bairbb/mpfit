# Тестовое задание MPFit

Веб-приложение для управления товарами и заказами, разработанное на Laravel.

## Требования

-   PHP 8.1 или выше
-   Composer
-   MySQL 5.7 или выше
-   Node.js и NPM (для сборки фронтенд-ресурсов)

## Установка

1. Клонируйте репозиторий:

```bash
git clone https://github.com/bairbb/mpfit
cd mpfit
```

2. Установите зависимости PHP:

```bash
composer install
```

3. Скопируйте файл конфигурации:

```bash
cp .env.example .env
```

4. Сгенерируйте ключ приложения:

```bash
php artisan key:generate
```

5. Настройте подключение к базе данных в файле `.env`:

6. Выполните миграции и заполните базу начальными данными:

```bash
php artisan migrate
```

7. Запустите сервер разработки:

```bash
php artisan serve
```

Приложение будет доступно по адресу: http://localhost:8000

## Технический стек

-   Laravel 9.x
-   PHP 8.2
-   MySQL
-   Bootstrap 5
-   HTML/CSS
-   JavaScript

## Автор

Баир Балданов
