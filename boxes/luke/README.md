# user & root:
  - standard nmap/gobuster/nikto scans
  - nikto found config.php and login.php
  - use creds in login.php to get a jwt token to login to api and get an API token
  - look at users table
  - specify a user to find their password
  - Use Derry's creds found from API on /management to find config.json
  - use creds found in config.json to log into ajenti
  - File explorer -> both user and root flag
  - user & root pwned
