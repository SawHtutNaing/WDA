<?php 
session_start();
require_once "../core/functions.php";

require_once "../template/header.php";

require_once '../core/connection.php';

?> 

<?php 
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST['name'];
    $money = $_POST['money'];
    $query = "INSERT INTO `aboutkhing`( `name`, `phone`) VALUES ('$name' , $money) " ;

    if(mysqli_query($auth , $query)){
        $_SESSION['status'] = [
            'message' => 'list created',
            'color' => 'primary'
          ];
          header('location:index.php');
    }else{
        echo "u fail" ;
    }
    


    
 
}

?>

<div class="container ">
    <div class="row   justify-content-center align-items-center">
        <div class="col-5 ">
            <form action=" " method="post">
                <div>
                    <label for="name" class="  form-label">Name</label>
                    <input type="text" name="name" class=" form-control" id="name">
                </div>
                <div>
                    <label for="money" class="  form-label">money</label>
                    <input type="text" name="money" class=" form-control" id="money">
                </div>
                <div class="mt-3">
                   <button class=" btn btn-primary" type="submit">Submit</button>
                </div>                
            </form>
        </div>
    </div>
</div>
<?php 
require_once "../template/footer.php";
?>