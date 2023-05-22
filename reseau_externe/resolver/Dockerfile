FROM ubuntu/bind9

RUN apt update && apt upgrade -y

WORKDIR /etc/bind

COPY named.conf /etc/bind
COPY 2tm-mes-2.ephec-ti.be.zone /etc/bind

CMD ["named", "-g"]
