# user:
  - Enumeration (nmap.txt)
  - Robots.txt -> writeup folder
  - Wappalyzer -> cms made simple
  - Page with input (index.php?page=_some number_)
  - Look for SQLi/LFI on /writeup/ -> no bruteforcing with gobuster or sqlmap -> blocked
    - CMSMS indicated SQL
  - Found cve.py on exploit-db (unauthenticated)
  - ./cve.py -u http://10.10.10.138/writeup/
  - Gave out.txt
  - Online md5 decrypter to find password (https://www.md5online.org/md5-decrypt.html)
  - SSH creds
  - user pwned

# root:
  - Upload a pspy
  - Some sort of cleanup script (no access) as a cronjob
  - Notice permissions on /usr/local/ for "staff" group -> id shows that jkr is apart of that group
  - Look at what happens when a new user logs in
  - key.txt
  - Read up on how env works
  - Create run-parts in jkr home that executes a reverse shell (also stored in home. Files are: run-parts and shell.sh)
    - jkr@writeup:~$ cp run-parts /usr/local/sbin/run-parts
    - jkr@writeup:~$ chmod 777 /usr/local/sbin/run-parts
      - Not making this executable is what made me spend a lot of time on it
      - Read up on env precedence and it said "runs the first _executable_ it finds as it goes down the path from left to right" (paraphrase)
  - Open a new ssh session and have nc listening for the shell
  - root pwned
