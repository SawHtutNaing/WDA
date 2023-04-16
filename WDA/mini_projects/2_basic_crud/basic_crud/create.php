<?php 

require_once './index.php';
$query = "CREATE DATABASE khin";


if(mysqli_query($auth , $query)){
    echo "aung be "; 
}else{
    echo "u fail";
}