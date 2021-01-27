#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

int main() {
  setuid(0);
  char *args[]={"/bin/bash", NULL};
  execve(args[0], args, NULL);
}
