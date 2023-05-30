FROM ubuntu:latest


RUN apt-get update
RUN apt-get install -y --no-install-recommends apt-utils
RUN apt-get install -y postfix
RUN apt-get install -y systemctl
RUN apt-get install -y mailutils
RUN apt-get install -y iputils-ping
RUN apt-get install -y telnet

COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/
COPY start.sh ./

RUN chmod 111 start.sh

EXPOSE 25 143 110 587 993

RUN useradd -m -p simon simon
RUN useradd -m -p pauline pauline
RUN useradd -m -p saskia saskia

CMD ./start.sh ; sleep infinity
