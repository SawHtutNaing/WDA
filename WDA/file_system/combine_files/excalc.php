
<?php 
include('head.php');
require_once "ex-logic.php";


?>

<div class="container">
    <h1>Exchange</h1>
    <form action=""></form>
</div>


<form  id="exForm" method="post">
    
</form>
<div class="row ">
<div class="col-12">
    <label for="changeAmount" class=" form-label">Amount</label>
<input type="number" form="exForm" id="changeAmount" name="amount"  class=" form-control" required>
</div>
<div class="col-6">
<label for="currency">From Currency</label>
<select required name="from" id=""  class=" form-select" form="exForm" >
    <option selected  disabled value="">choose your currency</option>
    <?php 
    foreach($rates as $key=>$value):
    ?>
    <option value="<?= $key ?>">
    <?= $key ?>

</option>
    <?php 
    endforeach;
    ?>

</select>
</div>
<div class="col-6">
<label for="currency">T0 Currency</label>
<select required name="to" id=""  class=" form-select" form="exForm">
    <option selected  disabled  value="">To</option>
    <?php 
    foreach($rates as $key=>$value):
    ?>
    <option value="<?= $key ?>">
    <?= $key ?>

</option>
    <?php 
    endforeach;
    ?>


</select>
</div>
<div class="col-12">
<button name="submit" class="btn btn-primary w-100 btn-lg" form="exForm">change</button>
</div>
</div>/

<?php 
include('footer.php');

?>