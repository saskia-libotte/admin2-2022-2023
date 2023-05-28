FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

RUN mkdir /var/log/apache2/html
RUN mkdir /var/log/apache2/php
RUN mkdir -p /www/home/logs/

COPY ./sites/ /var/www/

COPY ./secu/ports.conf /etc/apache2/
COPY ./apache2.conf /etc/apache2/
COPY ./secu/virtualhost/b2b.conf /etc/apache2/sites-available/
COPY ./secu/virtualhost/vitrine.conf /etc/apache2/sites-available/

COPY ./secu/private/private.key /etc/ssl/private/
COPY ./secu/ssl/ca_bundle.crt /etc/ssl/
COPY ./secu/ssl/certificate.crt /etc/ssl/

RUN a2dissite 000-default.conf

RUN a2enmod ssl

RUN a2ensite vitrine.conf
RUN a2ensite b2b.conf

RUN service apache restart

EXPOSE 80
EXPOSE 443