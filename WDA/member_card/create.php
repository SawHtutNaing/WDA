<?php 
if($_POST['submitBtn']){
     echo "<pre>";
print_r($_POST);
echo "<pre>";
print_r($_FILES);
$data = [
     'name' => $_POST['name'],
     'address' => $_POST['address'],
     'phone_number'=>$_POST['phone_number'],
     'bod' =>$_POST['bod']
];



}



// echo "this is arr " ;
// print_r($data);

