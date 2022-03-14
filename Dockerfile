FROM php:8.1.2-cli

RUN apt-get update
RUN apt-get install -y \
    git \
    unzip \
    zip

RUN pecl install -f xdebug
RUN docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --filename=composer
RUN mv composer /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/conf.d/php.ini

RUN mkdir /app
WORKDIR /app
