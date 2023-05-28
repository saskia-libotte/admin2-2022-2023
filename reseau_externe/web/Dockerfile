FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

RUN mkdir /var/log/apache2/html
RUN mkdir /var/log/apache2/php
RUN mkdir -p /www/home/logs/

COPY ./sites/ /var/www/

COPY ./conf/ports.conf /etc/apache2/
COPY ./conf/apache2.conf /etc/apache2/
COPY ./conf/virtualhosting/b2b.conf /etc/apache2/sites-available/
COPY ./conf/virtualhosting/vitrine.conf /etc/apache2/sites-available/

COPY ./conf/secu/private/private.key /etc/ssl/private/
COPY ./conf/secu/ssl/ca_bundle.crt /etc/ssl/
COPY ./conf/secu/ssl/certificate.crt /etc/ssl/

RUN a2dissite 000-default.conf

RUN a2enmod ssl

RUN a2ensite vitrine.conf
RUN a2ensite b2b.conf

RUN service apache2 restart

EXPOSE 80
EXPOSE 443