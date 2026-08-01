---
title: Laravel Breeze Blade MySQL
description: Laravel 13 with Breeze (Blade) authentication connected to a Railway MySQL database.
tags:
  - php
  - laravel + blade
  - auth
  - mysql
---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/template/baR0T4?referralCode=2Sbs5r)

## About this template

- PHP 8.3+
- Laravel 13
- Breeze authentication with the Blade template engine (register / login / profile)
- MySQL

## 📝 Notes

- **Env**: Envs are standard except `DB_URL` that is configured in Railway, not in the env file.
- **Database**: Laravel auto-selects MySQL when `DB_URL` is set (falls back to SQLite for local dev without a `.env`).
- **Migrations**: Run automatically on every deploy via `preDeployCommand` in `railway.toml` (idempotent).
- **Web server**: `php artisan serve` bound to `0.0.0.0:$PORT`.
- **Healthcheck**: `/up` route (registered in `bootstrap/app.php`).
- **Logging**: Logs are sent to stdout and can be accessed via `railway logs`.

## 🚀 Local Development

```bash
cp .env.example .env
composer install
npm install
npm run build
php artisan serve
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

