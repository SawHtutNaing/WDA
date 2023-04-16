<?php 
require_once './index.php';
$query = "UPDATE `aboutkhing` SET `name`='saw love khin mon zin' WHERE id = 2 " ; 


if(mysqli_query($auth , $query)){
    echo "done delete" ; 
}else{
    echo "u fail ";
}