<?php 

//conncet to db
$connection = mysqli_connect('localhost','fahmy','test1234','stp');

//check connection
if(!$connection){
    echo 'Connection error' . mysqli_connect_error();
}

?>