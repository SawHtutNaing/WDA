<?php 

    
    session_start();
require_once "../core/functions.php";


require_once "../template/header.php";
require_once '../core/connection.php';

 if($_SERVER['REQUEST_METHOD'] == "POST" ){
    $id = $_POST['id'];
    $query = " DELETE  FROM `aboutkhing` Where  id = $id " ; 
    global $auth ;  
    mysqli_query($auth , $query) ; 
    $_SESSION['status'] = [
      'message' => 'list deleted',
      'color' => 'danger'
    ];
    return header("location:index.php");
 }
    



require_once "../template/footer.php";
?>