FROM hiqdev/php:7.1-cli

RUN docker-php-ext-install pdo_mysql && \
    apt-get update && \
    apt-get install -y --no-install-recommends git ssh-client && \
    apt-get clean

RUN { \
    echo "memory_limit = 2G"; \
} | tee -a /usr/local/etc/php/php.ini
