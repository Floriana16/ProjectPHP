<?php

$connection = new mysqli('localhost', 'root', null, 'emag');
if(!$connection){
    echo('Connection unsuccessful');
}

?>