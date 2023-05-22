FROM mysql:latest

LABEL group="2tm-mes-2"

RUN chown -R mysql:root /var/lib/mysql/

ENV MYSQL_DATABASE=woodytoys
ENV MYSQL_ROOT_PASSWORD=root

COPY data.sql /docker-entrypoint-initdb.d/data.sql

EXPOSE 3306

CMD ["mysqld"]