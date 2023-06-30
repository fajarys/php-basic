<?php
$fileCreate = fopen("fajar.txt", "w") or die("file not write");
$txt = "Fajar aja" . PHP_EOL;
echo fwrite($fileCreate, $txt);
echo fclose($fileCreate);

$filePlus = fopen('newText.txt', 'a') or die("file not read!");
$text = "new Text file" . PHP_EOL;
echo fwrite($filePlus, $text);
echo fclose($filePlus);
