FROM ubuntu:latest

LABEL group="2tm-mes-2"

RUN apt -y update
RUN apt -y install links nano sudo dnsutils iputils-ping telnet mutt php-mysqli

RUN adduser pauline && echo "pauline:pauline" | chpasswd


CMD ["sleep", "infinity"]