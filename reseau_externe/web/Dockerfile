FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

RUN mkdir /var/log/apache2/html
RUN mkdir /var/log/apache2/php
RUN mkdir -p /www/home/logs/

COPY ./sites/ /var/www/

COPY ./config/ports.conf /etc/apache2/
COPY ./config/apache2.conf /etc/apache2/
COPY ./config/virtualhosting/b2b.conf /etc/apache2/sites-available/
COPY ./config/virtualhosting/vitrine.conf /etc/apache2/sites-available/



# Désactiver le site par défaut
RUN a2dissite 000-default.conf

# Activer le module SSL
# RUN a2enmod ssl

# Activer les sites virtuels
RUN a2ensite vitrine.conf
RUN a2ensite b2b.conf

# Redémarrer le serveur Apache
RUN service apache2 restart

# Exposer les ports 80 (HTTP) et 443 (HTTPS)
EXPOSE 80
EXPOSE 443
