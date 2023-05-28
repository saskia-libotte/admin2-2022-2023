FROM ubuntu:latest


RUN apt update
RUN apt install dovecot-imapd dovecot-pop3d -y 
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install postfix dovecot-core dovecot-imapd dovecot-pop3d -y
RUN adduser simon && echo "simon:simon" | chpasswd
RUN apt install telnet postfix -y

COPY main.cf /etc/postfix/main.cf
COPY dovecot.conf /etc/dovecot/dovecot.conf
COPY 10-auth.conf /etc/dovecot/conf.d/10-auth.conf
COPY 10-mail.conf /etc/dovecot/conf.d/10-mail.conf
COPY 10-master.conf /etc/dovecot/conf.d/10-master.conf
COPY dovecot.conf /etc/dovecot/
COPY main.cf /etc/postfix/

EXPOSE 25 143 110 587 993


CMD service postfix start && service dovecot start && tail -f /dev/null