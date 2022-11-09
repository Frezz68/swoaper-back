FROM php:8.1-fpm-alpine

RUN apk update; \
    apk upgrade;

RUN apk add --no-cache git gmp gmp-dev unzip zip nodejs yarn lsof postgresql-dev

RUN docker-php-ext-install mysqli pdo pgsql pdo_pgsql gmp opcache

RUN curl -sSk https://getcomposer.org/installer | php -- --version=2.1.3 --disable-tls && \
    mv composer.phar /usr/local/bin/composer
