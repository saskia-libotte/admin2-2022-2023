FROM php:8.0-apache

COPY apache2.conf /etc/apache/
COPY ./index.php /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD ["apache2ctl","-D","FOREGROUND"]
