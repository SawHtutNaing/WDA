<?php 


$result =  scandir('photo');
$ans = [] ;
 
foreach ($result as  $value) {
    if($value == '.' || $value == '..'){
    }else{
      $ans[] = $value;
        };

}

print_r($ans);