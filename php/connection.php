<?php
//SPAK ROBOTICS

define('SPAK_SERVER', 'localhost');
define('SPAK_USERNAME', 'root');
define('SPAK_PASSWORD', 'password');
define('SPAK_NAME', 'userform');


$con = mysqli_connect(SPAK_SERVER, SPAK_USERNAME, SPAK_PASSWORD, SPAK_NAME);


if($con === false){
    die("ERROR: Connection failed. " . mysqli_connect_error());
}

//SPAK ROBOTICS
?>

