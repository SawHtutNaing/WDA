<?php 

require_once "functions.php";

if(! file_exists(Photo_Dir)){
    if(
        
        mkdir(Photo_Dir)
    )
    echo logger("photo folder",26);
};

if(! file_exists(Record_Dir)){
if(
    
    mkdir(Record_Dir)
)
echo logger("record folder",);
}