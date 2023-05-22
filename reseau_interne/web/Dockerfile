FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive 

RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN rm -rf /var/www/html && \
    ln -s /opt/html /var/www/html && \
    a2enmod rewrite

RUN echo "<FilesMatch \\.php$>" >> /etc/apache2/mods-enabled/php7.4.conf && \
    echo "SetHandler application/x-httpd-php" >> /etc/apache2/mods-enabled/php7.4.conf && \
    echo "</FilesMatch>" >> /etc/apache2/mods-enabled/php7.4.conf

COPY html /opt/html
COPY php.ini /etc/php/8.1/apache2/php.ini

EXPOSE 80

RUN service apache2 restart

CMD ["apache2ctl", "-D", "FOREGROUND"]