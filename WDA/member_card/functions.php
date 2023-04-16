<?php
require_once 'globals.php';
function print_out(string $text ,int $color_code = 32) : void{
 echo "\e[0;34m[log]"  . " \e[0;{$color_code}m".$text ;
};


// create function 



function create(){
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
upload('pf',PHOTO_DIR);

    
    

}

function upload(string $key ,string $dir): string{
   $file_name = $_FILES[$key]['name'];
   // $ext = getext($_FILES[$key]['name']) ;
   $new_file_name = $dir .'/'. randomfilename($file_name);

    move_uploaded_file($_FILES[$key]['tmp_name'] , $new_file_name);
    return $new_file_name ; 
    
}

function randomfilename($file_name) :string {
   $ext = getext($file_name);
  return md5(uniqid()) . " ." . $ext ;
}

function getext($file_name){
   return pathinfo($file_name)['extension'];
};


function saveJsonFile(){
   
}



// getext('employees.png');