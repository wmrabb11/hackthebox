#!/bin/bash

for i in $(ipfs refs local); do
  ipfs block get $i
done
