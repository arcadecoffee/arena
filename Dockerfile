FROM php:7.2-apache
COPY . /var/www/html/
WORKDIR /var/www/html
RUN php composer.phar install
