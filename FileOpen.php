<?php
$fileOpen = fopen('./lib/MyFunction.php', 'r') or die("file not found");
echo fread($fileOpen, filesize('./lib/MyFunction.php'));
fclose($fileOpen);
