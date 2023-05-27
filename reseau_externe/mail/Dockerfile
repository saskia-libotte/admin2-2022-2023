FROM ubuntu:latest


RUN apt update
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet postfix -y
RUN apt install net-tools -y
RUN apt install dovecot-common dovecot-imapd dovecot-pop3d -y
RUN apt install nano -y
RUN postfix dovecot-core dovecot-imapd dovecot-pop3d

COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/

EXPOSE 25 143 110 587 993


CMD service postfix start && service dovecot start && tail -f /dev/null