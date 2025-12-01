FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring xml \
    && pecl install redis \
    && docker-php-ext-enable redis

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Create startup script directly in Dockerfile
RUN echo '#!/bin/sh' > /usr/local/bin/start-laravel.sh && \
    echo 'set -e' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "📦 Running composer install..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'composer install --no-interaction --prefer-dist --optimize-autoloader' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "🔑 Generating app key..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'php artisan key:generate --force' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "📁 Creating storage directories..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "🧹 Clearing caches..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear || true' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "🔧 Running migrations..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'php artisan migrate --force || true' >> /usr/local/bin/start-laravel.sh && \
    echo 'echo "▶️ Starting Laravel..."' >> /usr/local/bin/start-laravel.sh && \
    echo 'php artisan serve --host=0.0.0.0 --port=8000' >> /usr/local/bin/start-laravel.sh && \
    chmod +x /usr/local/bin/start-laravel.sh

# Verify script exists and is executable
RUN ls -la /usr/local/bin/start-laravel.sh

CMD ["/usr/local/bin/start-laravel.sh"]
