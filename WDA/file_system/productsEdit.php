<?php

 $products = file_get_contents('https://fakestoreapi.com/products');
 $productsarr = json_decode($products,true);
function oknrsr($count){
    $text = " ";
    for($i=0;$i<$count;$i++){
        $text .= "* ";
    };
    return $text;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($productsarr as $product):
        ?>
<div style="max-height: 500px;">
    <h1> <?php echo
    
    $product['id']
    ?>   </h1>
    <p>
        <?php echo
        
        $product['description']
        
        ?>
    </p>
    <img style="height: 200px;" src="<?php echo  $product['image']  ?>" alt="" >

    <span>
        <?= 
        
        oknrsr($product['rating']['rate']);
        ?>
    </span>
</div>


    <?php endforeach;
    ?>
</body>
</html>