FROM ubuntu:latest


RUN apt update
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet postfix -y
RUN apt install net-tools -y
RUN apt install dovecot-common dovecot-imapd dovecot-pop3d -y
RUN apt install nano -y


COPY main.cf /etc/postfix/main.cf
COPY dovecot.conf /etc/dovecot/dovecot.conf
COPY 10-auth.conf /etc/dovecot/conf.d/10-auth.conf

EXPOSE 25 143 110 587 993


CMD service postfix start && service dovecot start && tail -f /dev/null