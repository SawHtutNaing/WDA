<?php

$api = file_get_contents("https://forex.cbm.gov.mm/api/latest");
$apidata = json_decode($api,true);
$rates = $apidata["rates"];
// print_r( $rates);

// mmk to others 

if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
$to = $_POST['to'];
$from =$_POST['from'];


};


?>


<div class="bg-light border-3  p-3">
<h3>

from 333 USD to MMK
</h3>    
<h1>
    Total - 555 MMK 
</h1>
</div>



