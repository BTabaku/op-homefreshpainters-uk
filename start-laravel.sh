#!/bin/sh
set -e

echo "📦 Running composer install..."
composer install --no-interaction --prefer-dist --optimize-autoloader

echo "🔑 Generating app key..."
php artisan key:generate --force

echo "📁 Creating storage directories..."
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

echo "🧹 Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear || true

echo "🔧 Running migrations..."
php artisan migrate --force || true

echo "▶️ Starting Laravel..."
php artisan serve --host=0.0.0.0 --port=8000
