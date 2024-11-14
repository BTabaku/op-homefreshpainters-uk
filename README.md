<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Setting up project

```bash
# Clear all Laravel caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Clear compiled files
php artisan clear-compiled
php artisan optimize:clear

# Remove and rebuild vendor
composer dump-autoload
composer install --optimize-autoloader --no-dev

# Clean npm/node modules and rebuild
rm -rf node_modules
rm package-lock.json
npm cache clean --force
npm install
npm run build

# Reset configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Verify clean state
php artisan about

```

## Accessing rights to files

```bash
# Navigate to Laravel project root
cd /home/BTABAKU/dev/op-homefreshpainters-uk

# Change permissions for all files including hidden
sudo find . -type f -exec chmod 777 {} \;
sudo find . -type d -exec chmod 777 {} \;

# Specific Laravel directories
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
sudo chmod -R 777 public
sudo chmod -R 777 vendor
sudo chmod -R 777 node_modules

# Hidden files
sudo chmod 777 .env*
sudo chmod 777 .gitignore
sudo chmod 777 .git

# Verify permissions
ls -la
```

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
