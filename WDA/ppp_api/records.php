<?php 

require_once "functions.php";

//  dd(scanFile(Record_Dir),true );


$data =  array_map(
    function($file){
        $currentFile = json_decode(file_get_contents(Record_Dir."/".$file),true);
         $currentFile['file'] = $file ;
         $currentFile['location'] = url(Record_Dir."/". $file);
        return $currentFile ; 
    }
    ,scanFile(Record_Dir)
);

echo response($data);

 