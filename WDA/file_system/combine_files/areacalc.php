<?php 

include('head.php');
include_once "server.php";



?>

<div class="container">
<h1>I am Area calculator </h1>

<form  method="post">
<div class="row">
<div class="col">

    <input class=" form-control" type="number" name="width" placeholder="width" id="width">
</div>
<div class="col">

    <input class=" form-control" type="number" id="breadth" name="breadth" placeholder="breadth">
</div>
<div class="col">
<button class="btn btn-primary form-control" name=" calc_btn" value="here">Calc</button>

</div>
</div>


    <!-- button yae default type ka submit prr so we do not need to add its type ="submit" and default method of form is get  -->


</form>
</div>

<?php 
include('footer.php');

?>