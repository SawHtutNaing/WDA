<?php

$fileName = "Mon";
$fileExt = ".txt";
$folderName = "khin";
// touch($fileName.$fileExt);
if(!is_dir($folderName)){

mkdir($folderName);
}


// touch($folderName."/"."khin".$fileExt);
// touch($folderName."/"."Mon".$fileExt);
//  touch($folderName."/"."khin".$fileExt);
//  touch($folderName."/"."ko".$fileExt);
//  touch($folderName."/"."chit".$fileExt);
//  touch($folderName."/"."dll".$fileExt);


 $file_count = scandir($folderName);
 print_r($file_count);
 foreach($file_count as $file){
    // if($file != "." && $file != ".."){
    //     unlink($folderName."./".$file);
    // }

    if(is_file($folderName."./".$file)){
        unlink($folderName."./".$file);

    }
 }

rmdir($folderName);




 

// touch($folderName."/".$fileName.$fileExt);

