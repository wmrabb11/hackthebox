# user:
  - Enumeration (nmap.txt)
  - SMBclient to look at files
  - Mount /Backups locally (sudo mount -t cifs //10.10.10.134/Backups ~/hackthebox/bastion/mount -o username=guest)
  - Mount the vhd (sudo guestmount --add 9b9cfbc4-369e-11e9-a17c-806e6f6e6963.vhd --inspector --ro ~/hackthebox/bastion/vhd3 -v)
  - Go to /Windows/System32/config
  - SAM file
  - Ophcrack to get hashes
  - john and rockyou to get password
  - SSH in
  - user pwned

# admin:
  - Enumeration
  - found mremoteng
  - research
  - Passwords are stored in the confcons.xml file
  - decrypt.py (https://github.com/haseebT/mRemoteNG-Decrypt)
  - Administrator password
  - SSH in
  - admin pwned
