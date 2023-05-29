FROM ubuntu/bind9:latest


RUN mkdir -p /var/log/named
RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install traceroute -y
RUN apt install links -y
RUN apt install tcpdump -y

WORKDIR /etc/bind

RUN cd /etc/bind
RUN dnssec-keygen -a RSASHA256 -b 1024 -n ZONE mmes-2.ephec-ti.be 
RUN dnssec-keygen -a RSASHA256 -b 1024 -n ZONE -f KSK mmes-2.ephec-ti.be


COPY named.conf /etc/bind/
COPY mmes-2.ephec-ti.be /etc/bind/
COPY reverse.lab /etc/bind/ 

EXPOSE 53/tcp/udp

CMD ["named"] ["mkdir", "-p", "/var/log/named/"]