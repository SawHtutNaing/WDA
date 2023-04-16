<?php

$info = [
    'name'=>'saw htut naing',
    'age'=>18

];


$products = [

    [
        'id'=>1,
        'name'=>'hla hla '
    ],
    
    [
        'id'=>2,
        'name'=>'mya mya  '
    ],
    
    [
        'id'=>3,
        'name'=>'hla hla '
    ],
    
    [
        'id'=>4,
        'name'=>'hla hla '
    ]


] ;

print_r( $products[0]);

// print_r(array_values($info));
// print_r(array_keys($info));

echo array_search("saw htut naing" , $info);
echo "array search";
// echo array_key_exists('age',$info); 

// echo array_key_exists("job" , $info) ;



// array map 
// print_r(array_map(function($product){
// // return $product['name']; 
// return [
//     'name'=> $product['name'],
//     'id'=>$product['id']++
// ];

// } , $products));


$p = array_filter($products , fn($product)=>$product['id']>2);
print_r($p);

echo array_reduce($products , fn($pv , $cv) => $pv+$cv['id'] , 0 );

$indexarr = [1,2,3];
echo array_sum($indexarr);

echo"\n";   
$json = file_get_contents("data.json");



$array = json_decode($json, true);
// it give stdobject 
$object = json_decode($json, );

var_dump($array);
echo"\n";
var_dump($object);

// object 
echo $object->name;  


// casting type declearation 

$weight = (int) 15 ;
$depth = (int) 15.222;

// out will only 15 not 15.222  



echo $weight;
echo '\n';
var_dump($weight + 5 );

echo "\n";

$arr = (object)[
    'name'=>
    
    
    'saw htut niang'
];

var_dump($arr);

echo $arr->name;
// echo $arr['name']


// castin in function 




// exchange rate 

// Json 

$data = file_get_contents('data.json');
$data_arr = json_decode($data,true);
print_r($data_arr);



// array encode 

echo "\n";

$arrsimple = ['a','b','c'];

echo json_encode($arrsimple);