<?php 
require_once 'header.php';
?>

<h1 class="text-center">
    Member Card Register
</h1>
<form action="create.php" method="post" enctype="multipart/form-data" id="form"></form>

<div class="ui-control w-50  mx-auto">    
    <div class="">
        <label for="name" class=" form-label">Name</label>
        <input form="form" type="text" class=" form-control  d-inline " id="name" name="name">
    </div>
    <div class="">
        <label for="phone_number" class=" form-label">Phone Number</label>
        <input form="form" type="text" class=" form-control d-inline " id="phone_number" name="phone_number">
    </div>
    <div class="">
        <label for="address" class=" form-label">Address </label>
        <input form="form" type="text" class=" form-control d-inline " id="address" name="address">
    </div>
    <div class="">
        <label for="bod" class=" form-label">birthday</label>
        <input form="form" type="date" class=" form-control d-inline " id="bod" name="bod">
    </div>
    <div class="">
        <label for="pf" class=" form-label">Profile Photo</label>
        <input form="form" type="file" class=" form-control d-inline " id="pf" name="pf" accept="image/png,image/jpeg"> 
    </div>
    <div class="">
        <label for="attachment" class=" form-label">attachment</label>
        <input form="form" type="file" class=" form-control d-inline " id="attachment" name="attachment[]" multiple>
    </div>
    <div class="mt-5">
        <button form="form" class="btn btn-primary" name="submitBtn">submit</button>
    </div>
</div>