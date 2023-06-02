$ORIGIN mmes-2.ephec-ti.be.
$TTL 86400
@           IN    SOA   ns.mmes-2.ephec-ti.be.  hostmaster.mmes-2.ephec-ti.be. (
                    2001062501 ; serial
                    21600      ; refresh after 6 hours
                    3600       ; retry after 1 hour
                    604800     ; expire after 1 week
                    86400 )    ; minimum TTL of 1 day

      IN    NS    ns.mmes-2.ephec-ti.be.

      IN    MX    10    mail.mmes-2.ephec-ti.be.

ns          IN    A    54.38.240.198
www         IN    A    54.38.240.198
b2b         IN    A    54.38.240.198
mail        IN    A    54.38.240.198

mmes-2.ephec-ti.be.   IN   TXT   "v=spf1 ip4:54.38.240.198  ip6:2001:41d0:305:2100:0:0:0:5a2  -all"

_dmarc.mmes-2.ephec-ti.be.  IN  TXT  "v=DMARC1; p=quarantine; rua=mailto:postmaster@mmes-2.ephec-ti.be"