---
title: Laravel 13 Breeze Blade MySQL
description: Laravel 13 starter with Breeze authentication (login, register, profile) and MySQL — deploy in one click on Railway.
tags:
  - php
  - laravel 13
  - breeze
  - blade
  - auth
  - mysql
---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel 13 Breeze Blade MySQL

**Laravel 13 + Breeze (Blade) + MySQL** — a production-ready authentication starter that deploys on Railway in one click. No configuration needed: the MySQL database is provisioned automatically and migrations run on every deploy.

## ✨ Why use this template?

- ✅ **Full authentication out of the box** — register, login, logout, email verification, password reset, and profile management with [Laravel Breeze](https://laravel.com/docs/starter-kits) (Blade stack)
- 🚀 **Laravel 13** — the latest stable release, running on PHP 8.4+ with [FrankenPHP](https://frankenphp.dev/)
- 🎨 **Blade + Tailwind CSS 4 + Vite** — modern frontend tooling, no build step to configure
- 🗄️ **MySQL included** — Railway provisions the database automatically and injects the connection string (`DB_URL`)
- ⚙️ **Zero-config deploy** — database migrations run automatically on every deploy via Railpack
- 🛡️ **Secure defaults** — healthcheck at `/up`, restart policy, and logs to stdout

## Deploy and Host

[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/template/baR0T4?referralCode=2Sbs5r)

Click the button above to deploy this template on [Railway](https://railway.com). Railway will provision a MySQL database, connect it to your app, run the migrations, and give you a public URL — in about 2 minutes.

### What you get

| Service | Description |
|---|---|
| Laravel 13 app | Breeze Blade auth stack, served by FrankenPHP |
| MySQL | Managed database, auto-connected via `DB_URL` |

## 🚀 Local Development

```bash
cp .env.example .env
composer install
npm install
npm run build
php artisan serve
```

## 📝 Notes

- **Database**: Laravel auto-selects MySQL when `DB_URL` is set (falls back to SQLite for local dev).
- **Migrations**: Run automatically on every deploy (idempotent).
- **Healthcheck**: `/up` route (registered in `bootstrap/app.php`).
- **Logging**: Logs go to stdout, viewable via `railway logs`.

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
