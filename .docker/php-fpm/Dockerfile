FROM hiqdev/php:7.1-fpm

RUN docker-php-ext-install pdo_mysql && \
    apt-get update && \
    apt-get install -y --no-install-recommends git ssh-client && \
    apt-get clean
