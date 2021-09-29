FROM php:8.0-fpm-buster

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /code
