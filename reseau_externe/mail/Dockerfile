FROM ubuntu:latest


RUN apt update
RUN apt install dovecot-imapd dovecot-pop3d -y 
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet postfix -y

COPY dovecot.conf /etc/dovecot/
COPY main.cf /etc/postfix/

EXPOSE 25 143 110 587 993

RUN useradd -rm -p $(openssl passwd -1 contact) contact

CMD service postfix start && service dovecot start && tail -f /dev/null