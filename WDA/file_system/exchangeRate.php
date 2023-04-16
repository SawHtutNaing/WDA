<?php

// $exchange = file_get_contents('http://forex.cbm.gov.mm/api/latest');
// $exchange = curl "http://forex.cbm.gov.mm/api/latest";

$url = 'http://forex.cbm.gov.mm/api/latest';
$headers = array(
    'Accept: application/json'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);
print_r($output);
die();
if ($output === false) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    $data = json_decode($output);
    if ($data === null) {
        echo 'Error decoding JSON: ' . json_last_error_msg();
    } else {
        var_dump($data);
    }
}

curl_close($ch);





// $exchangearr = json_decode($exchange,true);

// print_r($exchangearr['rates']);