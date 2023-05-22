FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update 
RUN apt-get install -y postfix dovecot-pop3d dovecot-imapd

COPY dovecot /etc/dovecot
COPY postfix /etc/postfix

RUN adduser nathan && echo "nathan:nathan" | chpasswd
RUN adduser francois && echo "francois:francois" | chpasswd

EXPOSE 25 143 587 993

CMD service postfix start && service dovecot start && sleep infinity