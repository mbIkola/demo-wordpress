FROM php:fpm


RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        zlib1g-dev g++ libxml2-dev \
    && docker-php-ext-install -j$(nproc) iconv  \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN pecl install mcrypt-1.0.1
RUN docker-php-ext-enable mcrypt

RUN docker-php-ext-install pdo_mysql  mysqli exif intl json soap dom zip opcache

COPY config/php-fpm.conf /usr/local/etc/php-fpm.conf

RUN mkdir /var/www/wordpress
VOLUME /var/www/wordpress
EXPOSE 9900

CMD [ "/usr/local/sbin/php-fpm" , "-R", "-F", "-O", "-c", "/usr/local/etc/php-fpm.conf"]