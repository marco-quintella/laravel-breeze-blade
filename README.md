# Deploy and Host Laravel 13 Breeze Blade MySQL on Railway

Laravel 13.37 (18 October 2026) Breeze auth starter with MySQL. One click provisions the database, injects `DB_URL`, runs migrations, and serves the app with FrankenPHP — register, login, and profile pages working out of the box.

[![Deploy on Railway](https://railway.com/button.svg)](https://railway.com/template/baR0T4?referralCode=2Sbs5r)

## About Hosting Laravel 13 Breeze Blade MySQL

Railpack builds this repo on PHP 8.4 and starts FrankenPHP with the document root at `public`. The start script runs `php artisan migrate --force` before the server listens. Railway's healthcheck is `GET /up`. The app trusts Railway's proxy, so login redirects and assets stay on HTTPS.

The MySQL service is part of the template. Its connection string is wired to `DB_URL`. If the wizard also sets `DB_CONNECTION=sqlite` (the skeleton default), a present `DB_URL` still selects MySQL. `ext-pdo_mysql` is required in `composer.json`, so Railpack installs the driver even when `DB_CONNECTION` is not `mysql`.

## Why Deploy Laravel 13 Breeze Blade MySQL on Railway?

- October 2026 framework: Laravel 13.37, PHP 8.4, Breeze 2.4 auth (Blade), Vite 8, Tailwind CSS.
- Full auth out of the box: register, login, logout, password reset, email verification, profile.
- MySQL is provisioned with the app. No manual connection form.
- Migrations run on every deploy and are safe to repeat.
- `GET /up` is the healthcheck. Logs from the start script go to the deploy logs.

## Common Use Cases

- Start a SaaS with login and registration that already talks to MySQL on Railway.
- Confirm a production auth deploy path before adding subscriptions, teams, or your own routes.
- Fork the starter and keep the `DB_URL` connection rule.

## Dependencies for Laravel 13 Breeze Blade MySQL Hosting

### Deployment Dependencies

- Laravel 13.37 and PHP 8.4
- MySQL 9 (the template service). `DB_URL` is `${{MySQL.MYSQL_PUBLIC_URL}}`
- FrankenPHP, installed by Railpack
- Vite 8 and Tailwind CSS, built during the Railpack install

## What you get

| Service | Description |
|---|---|
| Laravel 13.37 app | Breeze Blade auth stack, served by FrankenPHP |
| MySQL 9 | Managed database, connected via `DB_URL` |

## Local development

```bash
cp .env.example .env
composer install
npm install
npm run build
php artisan key:generate
php artisan serve
```

Without `DB_URL`, the app uses SQLite. Set `DB_URL` to a MySQL URL when you want the same connection the template uses.

## Notes

- **Database**: `config/database.php` uses MySQL whenever `DB_URL` is set, including when `DB_CONNECTION` is `sqlite`.
- **Auth**: Breeze Blade routes (`/register`, `/login`, `/dashboard`, `/profile`) are covered by the default feature tests.
- **Migrations**: run on every deploy.
- **Healthcheck**: `/up`, registered in `bootstrap/app.php`.
- **Logging**: the start script prints migration output to the deploy logs (`railway logs`).
