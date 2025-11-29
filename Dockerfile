FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring xml

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy startup script
COPY start-laravel.sh /usr/local/bin/start-laravel.sh
RUN chmod +x /usr/local/bin/start-laravel.sh

# Verify script exists
RUN ls -la /usr/local/bin/start-laravel.sh
