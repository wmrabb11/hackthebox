# user:
  - enumeration (nmap.txt)
  - /etc/hosts for api, gogs, and db.craft.htb
  - interact.py
  - docker.txt
  - gilfoyle creds
  - login to gogs as gilfoyle
  - private repo
  - ssh private key found so use that to ssh in
  - user pwned

# root:
  - found token from gogs (token.txt)
  - read up on how to login and the features
  - ssh is interesting
  - vault token lookup f1783c8d-41c7-0b12-d1c1-cf2aa17ac6b9
    - shows root access
  - https://gogs.craft.htb/gilfoyle/craft-infra/src/master/vault/secrets.sh
    - shows ssh/roles/root_otp
  - vault read ssh/roles/root_otp
    - shows keytype, shows I'll have root
  - vault login token=f1783c8d-41c7-0b12-d1c1-cf2aa17ac6b9
  - vault ssh root@127.0.0.1
  - shows OTP
  - Copy and paste
  - root pwned
