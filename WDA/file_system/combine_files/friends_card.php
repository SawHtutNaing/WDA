<?php 



include('head.php');
// include_once "fir_logic.php";
?>

<h1>Friends Card</h1>
<form method="post" action="fir_logic.php" enctype="multipart/form-data" id="form">

</form>
<div class="container my-3" >
    <div class="mb-3">
        <label class=" form-label" for="name">Friends name</label>
        <input type="text" name="name" id="name" required class=" form-control" form="form">
    </div>
    <div class="mb-3">
        <label class=" form-label" for="phone">Friends phone</label>
        <input type="tel" name="phone" id="phone" required class=" form-control" form="form">
    </div>
    <div class="mb-3">
        <label class=" form-label" for="address">Friends address</label>
        <textarea name="address" id="address" cols="30" rows="10" placeholder="address">

        </textarea>
    </div>
    <div class="mb-3">
        <label class=" form-label" for="file">Friends Photo</label>
        <input type="file" multiple name="file" id="file" accept="image/jpeg,image/png" required class=" form-control" form="form">
    </div>
    <div class="mb-3 ">
        <label class=" form-label" for="verified">Verified</label>
        <input name="verified" type="checkbox" value="yes" id="verified" form="form">
    </div>
    <div>
        <button class="btn btn-primary w-100 btn-lg" form="form"> Create Friends </button>
    </div>
    


</div>



<?php 
include('footer.php');

?>

