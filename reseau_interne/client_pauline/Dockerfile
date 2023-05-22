FROM ubuntu:latest

LABEL group="2tm-mes-2"

RUN apt -y update
RUN apt -y install links nano sudo dnsutils iputils-ping telnet mutt

RUN adduser pauline && echo "pauline:pauline" | chpasswd

COPY .muttrc /home/pauline/.muttrc

CMD ["sleep", "infinity"]