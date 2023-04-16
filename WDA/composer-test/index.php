<?php

use chillerlan\QRCode\QRCode;

require_once "vendor/autoload.php";

$data = 'www.google.com';

// quick and simple:
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';