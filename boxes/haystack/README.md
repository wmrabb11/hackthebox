# user:
  - enum directory for nmap and gobuster scans
  - download image and look at extra data: gave a hint
  - use elasticsearch to find full database 
  - username and password to user security ssh are b64 encoded there
  - ssh into as security
  - user pwned

# root:
  - Reverse js shell in /tmp
  - https://github.com/mpgn/CVE-2018-17246 
  - use curl with '' to exploit cve from security user with reverse shell
  - Now kibana
  - Read up on logstash, look at what you have access to and don't
  - Logstash takes in files from /opt/kibana (owned by kibana user)
  - /etc/logstash/conf.d/ has .conf files on how it takes input
  - Pay attention to filter -> filter will tell u how to execute command in spanish
  - put a file with .txt as it gets erased and one without containing bash reverse shell (according to format in filter)
  - root pwned
