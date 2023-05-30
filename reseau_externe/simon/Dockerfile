FROM ubuntu:latest

RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install links -y
RUN apt install tcpdump -y
RUN apt install telnet -y
RUN apt install mutt -y

RUN useradd -rm -p $(openssl passwd -1 simon) simon

COPY .muttrc /home/simon/

USER simon

ENTRYPOINT ["tail"] 
CMD ["-f","/dev/null"]