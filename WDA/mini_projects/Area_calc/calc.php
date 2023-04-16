<?php
header('Content-type:Application/json');
echo "hello";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $result = [
        "width" => $_POST['width']."ft",
        'breadth' =>$_POST['breadth']."ft",
        'area' => ($_POST['width'] * $_POST['breadth']) .'sqft'
    ];

    echo json_encode($result);
    // print_r($_POST);
}

?>