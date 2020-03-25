#!/usr/bin/python3

import os
import sys

def convert(filename):
    lines = []
    with open(filename, 'r') as f:
        for l in f.read().split('\\n'):
            lines.append( l )
    with open(filename, 'w') as f:
        for l in lines:
            f.write(l + '\n')

if __name__=="__main__":
    if len(sys.argv) != 2:
        print( "Need to specify a filename to convert" )
        sys.exit()
    convert(sys.argv[1])
