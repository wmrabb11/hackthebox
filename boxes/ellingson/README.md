# user:
  - Enumerate website
  - Index used on /articles/#
  - Invalid index -> error message
  - Spawn python shell as hal (just by clicking the terminal icon)
  - Use subprocess.check_output to play around with the shell (calling linux commands directly)
  - See what you can and can't do in the shell (can't make a reverse shell, connection won't make it back to you; maybe a firewall?)
  - Add yourself to hal's authorized_keys
  - SSH in
  - LinEnum.sh -> /var/backups -> backup of /etc/shadow
  - hashes.txt
  - john-the-ripper with rockyou.txt from kali (ran overnight)
    - theplague:password123 found, but wasn't a valid password
    - margo:iamgod$08
    - Nothing found for other users
  - SSH in as margo
  - user pwned

# root:
  - Enumeration (with LinEnum)
  - Unusual binary (garbage) in /usr/bin with setuid bit
  - exp.py
  - root pwned
