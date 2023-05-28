FROM php:7.4-apache

# Ajout de différents packages.
RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt install -y openssl certbot python3-certbot-apache

# Certificats pour le site www
RUN openssl genrsa -out /etc/ssl/certs/www.key 2048
RUN openssl req -new -sha256 -key /etc/ssl/certs/www.key -out /etc/ssl/certs/www.csr -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=www.mmes-2.ephec-ti.be"
RUN openssl x509 -req -days 365 -in /etc/ssl/certs/www.csr -signkey /etc/ssl/certs/www.key -out /etc/ssl/certs/www.crt

# Certificats pour le site b2b
RUN openssl genrsa -out /etc/ssl/certs/b2b.key 2048
RUN openssl req -new -sha256 -key /etc/ssl/certs/b2b.key -out /etc/ssl/certs/b2b.csr -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=b2b.mmes-2.ephec-ti.be"
RUN openssl x509 -req -days 365 -in /etc/ssl/certs/b2b.csr -signkey /etc/ssl/certs/b2b.key -out /etc/ssl/certs/b2b.crt

# Copie des fichiers à implémenter dans le container docker "web".
COPY config/www.mmes-2.ephec-ti.be.conf /etc/apache2/sites-available
COPY config/b2b.mmes-2.ephec-ti.be.conf /etc/apache2/sites-available

# lien entre sites-available et sitesenabled
RUN ln -s /etc/apache2/sites-available/www.mmes-2.ephec-ti.be.conf /etc/apache2/sites-enabled
RUN ln -s /etc/apache2/sites-available/b2b.mmes-2.ephec-ti.be.conf /etc/apache2/sites-enabled

# Création des répertoire dans le container
RUN mkdir /var/www/b2b.mmes-2.ephec-ti.be
RUN mkdir /var/www/www.mmes-2.ephec-ti.be


# Copier des fichier à afficher contenant les pages web
COPY /sites/www/index.html /var/www/www.mmes-2.ephec-ti.be
COPY /sites/b2b/index.php /var/www/b2b.mmes-2.ephec-ti.be

# SSL
RUN a2enmod ssl
RUN service apache2 start