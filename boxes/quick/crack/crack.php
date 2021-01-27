<?php
  $fn = fopen("/usr/share/wordlists/rockyou.txt", "r");
  $to_compare = "e626d51f8fbfd1124fdea88396c35d05";
  while (! feof($fn)) {
    $line = fgets($fn);
    $line = str_replace(array("\n", "\r"), '', $line);
    $hashed = md5(crypt($line, 'fa'));
    if ($hashed === $to_compare) {
      echo "[+] Password found: $line\n";
      break;
    }
  }
  fclose($fn);
?>
