<?php
$fruits = ["orange","apple","grape","pineapple"];
$info =[
    'name'=>'mg mg',
    'age'=>15,
    'gender'=>"male",
    "gf"=>null
];


$products = [

    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>0,
        'unit'=>'piece'

    ],
    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>20,
        'unit'=>'piece'

    ],
    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>20,
        'unit'=>'piece'

    ],
    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>20,
        'unit'=>'piece'

    ],
    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>20,
        'unit'=>'piece'

    ],
    [   
        'name'=>'glass',
        'price'=>2000,
        'stock'=>20,
        'unit'=>'piece'

    ]

]

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
td,th{
    border: 1px solid black;
}

.bg-red{
    background-color: red;
}


</style>
<body>
<ul>
<?php
foreach($fruits as $key=>$fruit):
?>
<html>
<li>
    <?php
    
    echo $key  . $fruit;
    
    ?>
</li>
</html>

<?php
endforeach;



?>  
</ul>
  

<table>
<thead>
    
<tr>
<?php 
foreach($products[0] as $key=>$product):


    ?>
<th>
    <?=
    $key
    
    ?>
</th>

    <?php
endforeach;

?>

</tr>

</thead>
<tbody>
    <?php 
foreach($products as $product):
?>
    <tr class=" <?=  $product['stock']>10 ? "" :"bg-red"   ?>">

    <?php 

foreach($product as $each):
?>
<td>
<?php 
echo $each

?>

</td>
<?php
endforeach;
    ?>
    </tr>

    <?php 
    
endforeach;
?>
</tbody>

</table>





</body>
</html>