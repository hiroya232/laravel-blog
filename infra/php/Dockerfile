FROM php:8.0-fpm-buster

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /code
