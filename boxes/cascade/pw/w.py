#!/usr/bin/env python3

import struct

pw_bytes = [0x6b, 0xcf, 0x2a, 0x4b, 0x6e, 0x5a, 0xca, 0x0f]

fh = open('enc_pw', 'wb')
for b in pw_bytes:
    fh.write(struct.pack("B", b))
fh.close()
