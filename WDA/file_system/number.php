<?php
system("clear");
echo PHP_INT_MAX;
echo "\n";

echo PHP_INT_MIN;
echo"\n";
echo PHP_INT_SIZE;

var_dump(is_int('123'));
echo"\n";
var_dump(is_int(123));
echo"\n";
echo"about infinite:";
var_dump(is_infinite(PHP_INT_MAX * 1000 ));
echo"test";
echo min(33,44,33,222,111,9);
echo"\n";
echo max(-000,00,-11);

echo number_format(444444444444.4445454545,4,":","-");

