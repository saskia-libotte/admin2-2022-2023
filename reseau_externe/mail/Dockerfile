FROM ubuntu:latest


RUN apt update
RUN apt-get install dovecot-common dovecot-imapd dovecot-pop3d -y
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet postfix -y

COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/
# COPY start.sh ./

# RUN chmod 111 start.sh

EXPOSE 25 143 110 587 993

RUN useradd -m -p simon simon
RUN useradd -m -p pauline pauline
RUN useradd -m -p saskia saskia

CMD service postfix start && service dovecot start && tail -f /dev/null
# CMD ./start.sh ; sleep infinity
