# user:
  - nmap directory for initial scans
  - Only port 22 and 80 are open
  - There's a login page (/login.php), so we know it's a PHP app
  - Uploaded images are stored in '/images/uploads'
  - Default images are stored in '/images/fulls'
  - Tried a SQLi for the login.php (password='OR 1=1--), it doesn't give me an error message like it does for an invalid password
  - So I tried SQLmap and found a valid login (admin';WAITFOR DELAY '0:0:5'--) with no password
  - Can now log in and see the uploads page
  - Tried uploading a php script with a 'a.php.jpg' -> alert message with "what're you trying to do there?"
  - Go back to the SQLi, maybe try to fuzz a password?
  - NOPE. You can upload a php shell
  - Upload the 'shell.php.jpg' to get a working cmd environment
  - Then use SimpleHTTPServer and wget in the webshell to pull an actual reverse shell (www/a.php)
  - Navigate to '/images/uploads/a.php' -> reverse shell as www-data!
  - Found creds in 'db.php5', but can't SSH in -> public key denied
  - Create own PHP script to interface with DB
    - Databases:
      - information_schema
      - Magic
    - Can leak password from 'login table'
  - Now 'su' into theseus
  - user pwned

# root:
  - Run linpeas for some enumeration on what we can do as theseus
  - /bin/sysinfo is executable by us, but not anybody else because of the 'users' group
    - ```-rwsr-x--- 1 root users 22040 Oct 21 03:45 /bin/sysinfo```
  - Open up two terminals, one run pspy and the other run the sysinfo
  - You can see it's calling fdisk without a path
  - Put a bash reverse shell called 'fdisk' in the /tmp directory (or anywhere you can write)
    - Add that path to your PATH enviornment variable
  - Setup a nc listener
  - run sysinfo and now your fdisk will get executed, and because sysinfo runs as root, the shell you get back will be a root shell :)
  - root pwned
