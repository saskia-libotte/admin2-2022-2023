$ORIGIN mmes-2.ephec-ti.be.
$TTL 86400
@           IN    SOA   ns.mmes-2.ephec-ti.be.  hostmaster.mmes-2.ephec-ti.be. (
                    2001062501 ; serial
                    21600      ; refresh after 6 hours
                    3600       ; retry after 1 hour
                    604800     ; expire after 1 week
                    86400 )    ; minimum TTL of 1 day
; NS configs

            IN      NS      ns.mmes-2.ephec-ti.be.
            IN      MX  10  mail.mmes-2.ephec-ti.be.
ns          IN      A       54.38.240.198

; Web

www         IN    A    54.38.240.198
b2b         IN    A    54.38.240.198

; Mail
mail        IN    A    54.38.240.198
smtp        IN      CNAME   mail
pop	        IN	    CNAME   mail
imap	    IN      CNAME   mail

;secu SPF
mmes-2.ephec-ti.be.   IN   TXT   "v=spf1 ip4:54.38.240.198 -all"

;Secu DMARK
_dmarc.mmes-2.ephec-ti.be.  IN  TXT  "v=DMARC1; p=quarantine; rua=mailto:postmaster@mmes-2.ephec-ti.be"

;Secu DKIM

