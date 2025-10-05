FROM php:8.2-fpm-alpine

RUN apk add --no-cache git curl zip unzip libpng-dev libxml2-dev oniguruma-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer



WORKDIR /var/www/html
COPY . .
RUN composer install --no-interaction --prefer-dist --optimize-autoloader
RUN chown -R www-data:www-data storage bootstrap/cache

# Run composer install again when container starts (in case volume overrides)
RUN composer install --no-interaction --prefer-dist && php-fpm

EXPOSE 9000
CMD ["php-fpm"]


