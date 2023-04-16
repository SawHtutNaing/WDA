<?php
include 'functions.php';

if(!file_exists(PHOTO_DIR)){
    if(mkdir(PHOTO_DIR) ){
        print_out('photo is created');
        echo " \n";
    }
};

if(!file_exists(RECORD_DIR)){
    if(mkdir(RECORD_DIR)){
        print_out('record is created');
    }
}
