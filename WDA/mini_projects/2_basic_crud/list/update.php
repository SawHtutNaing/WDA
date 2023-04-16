<?php 
session_start();
    
    
require_once "../core/functions.php";


require_once "../template/header.php";
require_once '../core/connection.php';


if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['updateBtn'])){
    $id = $_POST['id'];
    $query = " SELECT *   FROM `aboutkhing` Where  id = $id " ; 
    global $auth ;  
    $selectData =  mysqli_query($auth , $query) ; 
    $data = mysqli_fetch_assoc($selectData);
    // print_r($data);
 }

 if($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['updateBtn'])){

$name = $_POST['name'];
$money = $_POST['money'];
$id = $_POST['id'];

global $auth ;  

print_r($_POST);
     $query =  "UPDATE `aboutkhing` SET `name`='$name',`phone`='$money' WHERE id = $id ";
      mysqli_query($auth ,$query) ; 
      $_SESSION['status'] = [
        'message' => 'list updated',
        'color' => 'success'
      ];
      return header("location:index.php");
     };
    


?>


<div class="container ">
    <div class="row   justify-content-center align-items-center">
        <div class="col-5 ">
            <form  method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div>
                    <label for="name" class="  form-label">Name</label>
                    <input type="text" value="<?= $data['name'] ?>" name="name" class=" form-control" id="name">
                </div>
                <div>
                    <label for="money" class="  form-label">money</label>
                    <input type="text" value="<?= $data['phone'] ?>"  name="money" class=" form-control" id="money">
                </div>
                <div class="mt-3">
                   <button class=" btn btn-primary" type="submit" name="updateBtn">Submit</button>
                </div>                
            </form>
        </div>
    </div>
</div>

<?php 
require_once "../template/footer.php";
?>