# user:
  - Enumerate (nmap.txt)
  - Web Server default apache page
  - Comment on HTML page telling you how to download binary
  - Binary vulnerable to buffer overflow/ROP
  - exploit.py
  - user pwned

# root:
  - Grab MyPasswords file
  - Do some research on keepass
  - keepass2john
  - Uses a key file
  - Try images as key one by one for keepass2john then use john and rockyou.txt to crack the hash
  - IMG_0547.JPG (hashes3.txt) yields password "bullshit" 
  - Download keepass manager
  - Open file with password: "bullshit" and the JPG as the key file
  - There lies the root password
  - "su root" with shell from user -> insert found password
  - root pwned
