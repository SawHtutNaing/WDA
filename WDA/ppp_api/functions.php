<?php 
require_once "globals.php";



function url(string $path = null) : string{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://"; 
    $url .= $_SERVER['HTTP_HOST'];
    if(isset($path)){
        $url .= "/";
        return $url.= $path ; 
    }
    return $url;
}


function response(mixed $data ,int $status = 200 ): string
{


    header("Content-type:Application/json");
    http_response_code($status);
if(is_array($data)){
    
    return json_encode($data);
    // return json_encode($data) . "\n  " . "oki nr sr ";
    
}

return json_encode(['message'=>$data]);
};


function dd($data , $showType = false) :void{
    // die and dump 
    
if($showType){
    echo "<pre style='background-color:white ; color :red;'>"; 
    var_dump($data);
    echo "</pre>"; 
    
}else{
    echo "<pre style='background-color:yelow; color :red;'>"; 
    print_r($data);
    echo "</pre>"; 
}
    die();
}


function area(float $width,float $breadth) :float{
 return $width * $breadth ; 
}

function logger(string $message ,int $colorCode = 32) {
    return  " \e[{$colorCode}m  $message " . " \e[35m"." is created "."\n" ; 
}

function extension($fileName) : string{
return pathinfo($fileName)['extension'];
}

function randomName($ext) : string{
return md5(uniqid()). ".". $ext;
}


function upload(string $key ,string $dir) : string{
    $ext  =  extension($_FILES[$key]['name']); 
    $newFileName = $dir."/".randomName($ext);
    move_uploaded_file($_FILES[$key]['tmp_name'] , $dir."/".randomName($ext));
    return $newFileName ; 

}

function saveJsonFile(string $text ): void {
    $newFileName = Record_Dir . "/" . randomName("json");
    $file = fopen($newFileName , 'w'); 
    fwrite($file,$text);
    fclose($file);
}


function scanFile($dir) :array{
    $files = scandir($dir);
    $result = [];
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $result[] = $file;
        }
    }
    return $result;

}