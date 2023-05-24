FROM mysql:latest

LABEL group="2tm-mes-2"

RUN chown -R mysql:root /var/lib/mysql/

ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_ROOT_PASSWORD

ENV MYSQL_DATABASE=woodytoys
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=user123
ENV MYSQL_ROOT_PASSWORD=user123

COPY test.sql /mysql/data.sql

RUN sed -i "s/MYSQL_DATABASE/'db'/g" /mysql/data.sql
RUN cp /mysql/data.sql /docker-entrypoint-initdb.d

EXPOSE 3306