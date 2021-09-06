<?php

define('DB_SERVER', 'ucka.veleri.hr');
define('DB_USERNAME', 'ftomac');
define('DB_PASSWORD', '11');
define('DB_NAME', 'ftomac');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>