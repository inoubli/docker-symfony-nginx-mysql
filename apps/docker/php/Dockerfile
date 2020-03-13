# ./docker/php/Dockerfile
FROM php:7.3-fpm

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev

RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mv composer /usr/local/bin/composer





WORKDIR /usr/src/app

COPY phpUnitTest /usr/src/app

USER root
RUN usermod -u 1000 www-data    # fix the UID
RUN mkdir -p var/cache/prod var/cache/dev var/cache/test var/log/dev \  && touch var/log/dev/dev.log \
   && chown -R www-data:www-data var/ \
   && chown -R www-data:www-data var/log/ \
   && chown -R www-data:www-data vendor/ \
   && chmod -R 777 var/ \
   && chmod -R 777 var/log \
   && chmod -R 777 vendor/ 
RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin