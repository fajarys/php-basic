<?php
echo 'ini string :';
echo "\n";

echo "ini juga string";
echo "\n";

//heredoc
echo <<<TEXT
ini adalah tipe data string
cara ke tiga menggunakan string
bisa dengan cara heredoc

TEXT;

//nowdoc
echo <<<'TEXT'
ini adalah tipe data string
cara ke tiga menggunakan string
bisa dengan cara heredoc
TEXT;
