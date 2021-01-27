# user:
  - nmap directory for initial scans
  - Looks like there are firewall rules, nmap returned that it appears down. However, I can ping the box and if I run nmap with '-Pn', it only returns port 445 is open
  - SMB enum
    - enum4linux doesn't find anything
    - smbmap doesn't find anything
  - No web page either
  - Full port scan shows port 4386 with a message 'This service allows users to run queries against databases using the legacy HQK format'
    - Can telnet and create a connection to the port
    - 'Reporting Service V1.2                                                                                         
       This service allows users to run queries against databases using the legacy HQK format
       AVAILABLE COMMANDS ---
       LIST                                           
       SETDIR <Directory_Name>
       RUNQUERY <Query_ID> 
       DEBUG <Password>   
       HELP <Command>'
    - Can 'SETDIR ..' to go up a directory
    - Can navigate through the directories but can run a query on anything
  - I am DUMB, smb has read access for anonymous shares (Found \\Shared) -> contained a user:pass
  - Domain name found? '\\HTB-NEST\Users\<USERNAME>'
  - Can read Data, Secure$, and Users shares now
    - Dumped a bunch of files into 'smb' directory
    - Found a base64 encoded pw hash (looks like sha256)
    - Can't read anything in Secure as TempUser
  - Within a 'config.xml', there's a file path on the Secure$ smb share, leading to Carl's directory
    - We can cd into here without being able to list the contents of the IT directory
  - There's a VB project that is used to decrypt strings in the RU_Config.xml, which is where we found the password for c.smith
    - Use an online VB compiler to get ('creds.txt')
  - Log into SMB as C.Smith and get the user flag!
  - user pwned

# root:
  - Found a password file in the \Users share with 'Debug Mode Password.txt'
  - Probably related to the weird HQK service we found earlier
  - Spent a lot of time digging around the files, seeing if there was something I missed
  - Tried 'allinfo' on the file, and found it has an alternate data stream
    - ```get "Debug Mode Password.txt:Password:$DATA"```
  - Found the password!
  - Log in to the service and use "DEBUG *password*" to start digging around files
  - Found an Admin password (in ldap.conf), but it's encrypted
  - HqkLdap.exe is accessible on c.smith's smb share, probably able to decrypt the password if we reproduce the steps for unencrypting the RU_Config.xml password
  - Download it to your own box
  - Use a decompiler (like dotPeek) and an online compiler to run the code to grab the password
  - Log into SMB as Administrator to grab the root.txt
  - root pwned
