# user:
  - Enumerate (nmap.txt)
  - SQLi on rooms.php
  - sqlmap to dump db
  - sqlmap found DBadmin password hash
  - md5 decrypter online -> creds
  - use phpmyadmin cve to get a reverse shell
  - found simpler.py
  - sudo -l shows you can run this as admin and execute arbitrary command
  - upload reverse bash shell to /var/www/html/shell.sh
  - sudo -u pepper /var/www/Admin-Utilities/simpler.py -p
    - Enter an IP: $(bash ../html/shell.sh)
  - user pwned

# root:
  - Add ssh keys to pepper
  - Upload pspy64
  - systemctl GTFO bins
  - https://gtfobins.github.io/gtfobins/systemctl/
  - follow procedure on there with nc reverse shell
  - root pwned
