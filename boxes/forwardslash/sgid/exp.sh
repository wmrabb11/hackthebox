#!/bin/sh

fname=$(date +%T)
echo $fname
hash=$(echo -n $fname | md5sum | awk '{ print $1 }' )
echo $hash 
ln -s /var/backups/config.php.bak $hash
backup
