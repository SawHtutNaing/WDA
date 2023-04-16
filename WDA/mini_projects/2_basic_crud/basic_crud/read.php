<?php 

require_once 'index.php';
$query = "SELECT * FROM `aboutkhing` ";

 $row = mysqli_query($auth , $query) ;
//  print_r(mysqli_fetch_assoc($row));

while($data =  mysqli_fetch_assoc($row)){
    print_r($data);
}