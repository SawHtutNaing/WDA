<?php 

$file_stream = "aa.txt";

$txt = file_get_contents($file_stream);

echo $txt."\n";

// $another_one = readfile($file_stream);


$stream = fopen($file_stream,"r");

$read = fread($stream,filesize($file_stream));

echo $read;   