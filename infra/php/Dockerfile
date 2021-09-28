FROM php:8.0-fpm-buster

RUN docker-php-ext-install pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /code
