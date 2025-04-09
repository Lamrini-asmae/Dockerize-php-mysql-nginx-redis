FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl zip

# 👉 Installer l'extension Redis ici
RUN pecl install redis && docker-php-ext-enable redis

WORKDIR /var/www/html
