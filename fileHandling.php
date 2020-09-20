<?php
$myReadFile = fopen("read.txt", "r");
$myWriteFile = fopen("write.txt", "w");
while(!feof($myReadFile)) {
    fwrite($myWriteFile,fgets($myReadFile));
  }
fclose($myReadFile);
fclose($myWriteFile);

$myWriteFile = fopen("write.txt", "r");
while(!feof($myWriteFile)) {
    echo fgets($myWriteFile);
    echo "</br>";
  }
  fclose($myWriteFile);
?>
