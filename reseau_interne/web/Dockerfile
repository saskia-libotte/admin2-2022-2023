# Utilisez une version spécifique de l'image de base Ubuntu
FROM ubuntu:20.04

# Définit la variable d'environnement DEBIAN_FRONTEND pour éviter les interactions utilisateur lors de l'installation des paquets
ENV DEBIAN_FRONTEND=noninteractive

# Mise à jour des paquets et installation d'Apache, PHP et des extensions PHP nécessaires
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Suppression du contenu par défaut du répertoire HTML d'Apache et création d'un lien symbolique vers le répertoire /opt/html
RUN rm -rf /var/www/html && \
    ln -s /opt/html /var/www/html && \
    a2enmod rewrite

# Configuration du module PHP pour Apache
RUN echo "<FilesMatch \\.php$>" >> /etc/apache2/conf-enabled/php.conf && \
    echo "SetHandler application/x-httpd-php" >> /etc/apache2/conf-enabled/php.conf && \
    echo "</FilesMatch>" >> /etc/apache2/conf-enabled/php.conf

# Copie du contenu du répertoire "html" dans le conteneur
COPY html /opt/html

# Copie du fichier de configuration php.ini
COPY php.ini /etc/php/8.1/apache2/php.ini

# Exposition du port 80 pour Apache
EXPOSE 80

# Commande de démarrage pour exécuter Apache en premier plan
CMD ["apache2ctl", "-D", "FOREGROUND"]