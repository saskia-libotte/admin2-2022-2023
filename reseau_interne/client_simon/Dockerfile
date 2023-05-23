FROM ubuntu:latest

LABEL group="2tm-mes-2"

RUN apt -y update
RUN apt -y install links nano sudo dnsutils iputils-ping telnet mutt

RUN adduser simon && echo "simon:simon" | chpasswd


CMD ["sleep", "infinity"]