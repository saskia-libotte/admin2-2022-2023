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
ENV MYSQL_DATABASE=db
ENV MYSQL_USER=root123
ENV MYSQL_PASSWORD=root123
ENV MYSQL_ROOT_PASSWORD=root

COPY db.sql /mysql/db.sql

RUN sed -i "s/MYSQL_DATABASE/'db'/g" /mysql/db.sql
RUN cp /mysql/db.sql /docker-entrypoint-initdb.d

EXPOSE 3306