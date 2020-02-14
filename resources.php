<?php
    $resources_dir = 'C:\xampp\htdocs\phpAPI\packages\Main-master\bucket';
    $files = scandir($resources_dir);
    $name = $_GET['name'];
    if (isset($_GET['name'])){

    }
    elseif (isset($_GET['version'])) {
        
    }
    elseif (isset($_GET['architecture'])) {
        
    }
    for($i = 0; $i < count($files); $i++){
        if (strpos($files[$i],$name)===false){

        }else{
            print_r($files[$i].' ');
        }
    }
?>