FROM ubuntu:latest


RUN apt update
RUN apt install iputils-ping -y
RUN apt install dnsutils -y
RUN apt install telnet -y
RUN apt install net-tools -y



EXPOSE 25 143 110 587 993


CMD  tail -f /dev/null