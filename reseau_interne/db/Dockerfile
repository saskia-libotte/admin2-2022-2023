FROM mysql:latest

LABEL group="2tm-mes-2"

RUN chown -R mysql:root /var/lib/mysql/

ENV MYSQL_DATABASE=woodytoys
ENV MYSQL_ROOT_PASSWORD=user123

COPY data.sql /docker-entrypoint-initdb.d/data.sql
RUN sed -i "s/MYSQL_DATABASE/'woodytoys'/g" /mysql/data.sql

EXPOSE 3306

CMD ["mysqld"]