<?php 

    session_start();
    
require_once "../core/functions.php";


require_once "../template/header.php";
require_once '../core/connection.php';

$query = "SELECT * FROM `aboutkhing` ";
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['search'])){
    // echo " hello world  ";
    $search = $_GET['search'];
    $query = "SELECT * FROM `aboutkhing` WHERE name LIKE  '%$search%' ";
}

$data =    mysqli_query($auth , $query);
// print_r($data);
if($data -> num_rows > 0 ){
    $totalMoney = "SELECT SUM(phone) as total FROM `aboutkhing` ; ";

$sum_money = mysqli_query($auth , $totalMoney) ; 
$getSum = mysqli_fetch_assoc($sum_money);
}

// $sum_money = mysqli_query($auth , $totalMoney) ; 
// $getSum = mysqli_fetch_assoc($sum_money); 

// function Delete(string $id )

// {
//     $query = "DELETE  FROM `aboutkhing` Where  id = $id " ; 
//     global $auth ;  
//     return mysqli_query($auth , $query) ; 
    
// }

if(!empty($_SESSION['status'])){
    echo alert($_SESSION['status']['message'] , $_SESSION['status']['color']);
    $_SESSION['status'] = null ; 
}

?> 
<div class="container">
    total peopole : <?=$data -> num_rows   ?>
    <div class="row">
        <div class="col-12">
           <div class="row">
           <div class="col-6">
           <h3>Total Money : <?=  $getSum['total']  ?></h3>
           </div>
           <div class="col-6">
            <form action="">
                <input type="text" name="search" value=" <?php if(isset($_GET['search'])){
                    echo $_GET['search'];
                }  ?>"
                
                >
                <a class="  bg-danger" href="./index.php">
                    x
                </a >
              
                <button >submit</button>
            </form>
           </div>
           </div>
         <table class=" table  table-striped table-bordered table-group-divider

         ">
            <thead>
                <th>id</th>
                <th>name</th>
                <th class="text-center">phone</th>
                <th>Controls</th>
                <th>Delete</th>
                <th>created_at</th>
            </thead>
            <tbody>
                <?php 
              while(  $row = mysqli_fetch_assoc($data)) :
                
                ?>
<tr>
    <th>
        <?= $row['id'] ?>
    </th>
    <th>
        <?= $row['name'] ?>
    </th>
    <th class=" text-end
    ">
        <?= $row['phone'] ?>
    </th>
    <th>
    <form action="./update.php" method="post">
       <input type="hidden" value="<?= $row['id'] ?>" name="id"> 
       
       <button  class=" btn btn-info">Update</button>
       </form>
    </th>
    <th>
       <form action="./delete.php" method="post">
       <input type="hidden" value="<?= $row['id'] ?>" name="id"> 
       
       <button  onclick="return confirm('Are U sure want to delete ? ')" class=" btn btn-danger">Delete</button>
       </form>
    </th>
    
    
    <th>
        <?= readableDate( "j M Y " , $row['created_at']) ?>
    </th>
</tr>

<?php
endwhile;

?>
            </tbody>
         </table>
        </div>
    </div>
</div>
<?php 
require_once "../template/footer.php";
?>