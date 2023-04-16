<?php
echo "<pre>";
print_r($_SERVER);
echo "<pre>";

print_r($_FILES);

$folder = "storehere";

if($_SERVER['REQUEST_METHOD'] ==="POST"){
    move_uploaded_file($_FILES['file']['tmp_name'] , $folder."/".$_FILES['file']['name']);
}