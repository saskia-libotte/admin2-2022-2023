FROM ubuntu:latest


RUN apt update
RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt install postfix -y

COPY dovecot.conf /etc/dovecot/
COPY postfix.conf /etc/postfix/

RUN adduser pauline && echo "pauline:pauline" | chpasswd
RUN adduser simon && echo "simon:simon" | chpasswd
RUN adduser saskia && echo "saskia:saskia" | chpasswd

EXPOSE 25 143 110 587 993

CMD service postfix start && service dovecot start && tail -f /dev/null