### Disclaimer: I watched ippsec's video on this box before doing it. I went through and did the box myself to learn more.

# user:
  - nmap directory for initial scans
  - ftp is open, all files available are in the ftp directory
  - looks like Solidity contract stuff, tbt to the NSA Codebreaker 2018
  - ftp/interact.py for a reverse shell
  - ipfs in administrator home directory -> RTFD
  - run blocks.sh on chainsaw to find base64 encoded private key (I used tmux to filter through the large amount of output of this script)
  - base64 decode the private key
  - use ssh2john to put into john-compatible hash
  - 'john bobby.john -wordlist=/usr/share/wordlists/rockyou.txt' yields password 'jackychain'
  - ssh in as bobby
  - user pwned

# root:
  - look in bobby home directory
  - projects directory leads to a new Solidity contract app with a SETUID bit
  - pull locally to analyze with r2
  - vulnerable to a path injection to overwrite sudo with just a bash script (that only executes 'bash')
  - now with root shell, but can't read root.txt
  - LinEnum to do some basic enumeration
  - find 'bmap' in /sbin/ (this, I wouldn't have been able to find if not for ippsec's video, but it's an interesting tool nonetheless)
  - 'bmap --mode slack /root/root.txt' to get the flag
  - root pwned
