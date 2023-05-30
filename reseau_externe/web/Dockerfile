FROM php:7.4-apache

RUN apt-get update && \
    apt-get install -y libzip-dev libicu-dev libonig-dev zlib1g-dev mariadb-client && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli && \
    a2enmod rewrite
RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install traceroute -y
RUN apt install links -y
RUN apt install tcpdump -y

COPY apache2.conf /etc/apache2/sites-available/apache2.conf
COPY b2b.conf /etc/apache2/sites-available/b2b.conf


RUN a2ensite apache2.conf
RUN a2ensite b2b.conf

COPY . /var/www/html
COPY ./html /var/www/html/site
COPY ./php /var/www/html/b2b

EXPOSE 443