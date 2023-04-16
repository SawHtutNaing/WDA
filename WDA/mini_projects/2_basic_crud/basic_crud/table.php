<?php 
require_once 'index.php';
$query = "CREATE TABLE `khin`.`aboutkhing` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `phone` VARCHAR(50) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if(mysqli_query($auth , $query)){
    echo "create table";
}else{
    echo "fail creating table";
}