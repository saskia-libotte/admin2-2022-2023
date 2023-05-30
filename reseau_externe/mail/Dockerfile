FROM ubuntu:latest


RUN apt update
RUN apt install dovecot-imapd dovecot-pop3d -y 
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt-get install -y mailutils
RUN apt install telnet -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install postfix dovecot-core dovecot-imapd dovecot-pop3d -y
RUN apt install telnet postfix -y
RUN useradd -rm -p $(openssl passwd -1 simon) simon

COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/
COPY start.sh ./

RUN chmod 111 start.sh

EXPOSE 25 143 110 587 



CMD ./start.sh ; sleep infinity