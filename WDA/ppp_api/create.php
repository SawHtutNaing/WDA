<?php 

require_once "functions.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $data = [
        "width" => $_POST["width"] . "ft",
        "breadth" => $_POST["breadth"] . "ft",
        "area" => area($_POST["width"] , $_POST["breadth"]) . "sqft"
    ];


    if(!empty(($_FILES) )&& ($_FILES['photo']['error'] == 0 )){
        // isset ဆို error တက်နေတယ် $_FILES ဆိုတာ မပါမှ !false ဖြစ်နေတယ် နောက်က ကောင် သိပ် မလုပ်မလုပ် ဘူး နော် 
$photoName = upload('photo',Photo_Dir);
$data['photo'] = url( $photoName) ;  
    };
    // isset() returns true if a variable is set and not null.
// !empty() returns true if a variable is set, not null and not empty.

    saveJsonFile(json_encode($data));

    echo response($data , 201 );
}


