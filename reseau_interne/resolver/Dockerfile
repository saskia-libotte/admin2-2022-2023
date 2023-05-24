FROM ubuntu/bind9:latest

LABEL group="2tm-mes-2"

COPY named.conf /etc/bind/named.conf


EXPOSE 53/udp
EXPOSE 53/tcp

CMD ["named", "-g"]