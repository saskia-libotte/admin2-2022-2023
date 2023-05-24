#Utiliser l'image de base de mysql
FROM mysql:latest


#Lancer la base de données
RUN chown -R mysql:root /var/lib/mysql/

#Passer les variable d'environement en argument pour la ligne de commande
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_ROOT_PASSWORD

#Crée une variable d'environement pour le mot de passe de la db
ENV MYSQL_DATABASE=dbadmin
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=root
ENV MYSQL_ROOT_PASSWORD=root

COPY test.sql /mysql/test.sql

RUN sed -i "s/MYSQL_DATABASE/'dbadmin'/g" /mysql/test.sql
RUN cp /mysql/test.sql /docker-entrypoint-initdb.d

EXPOSE 3306