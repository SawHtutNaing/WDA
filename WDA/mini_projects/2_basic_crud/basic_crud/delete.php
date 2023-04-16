<?php 
require_once './index.php';
$query = "DELETE FROM `aboutkhing` WHERE  id = 1 " ; 


if(mysqli_query($auth , $query)){
    echo "done delete" ; 
}else{
    echo "u fail ";
}