<?php 

require_once 'index.php';
$query = 'INSERT INTO `aboutkhing`( `name`, `phone`) VALUES ("aung aung" , "84849984") , ("aung aung  " , "8484")' ;

if(mysqli_query($auth , $query)){
    echo "successfully insert";
}else{
    echo "u fail" ;
}
