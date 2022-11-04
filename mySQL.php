<?php
// if(isset($_POST['submit'])){
//     // dp this to avoid malicous code
//     echo htmlspecialchars($_POST['firstName']); 
//     echo htmlspecialchars($_POST['lastName']);
//     echo htmlspecialchars($_POST['email']);
//     echo htmlspecialchars($_POST['password']);

// }

//conncet to db
$connection = mysqli_connect('localhost','fahmy','test1234','stp');

//check connection
if(!$connection){
    echo 'Connection error' . mysqli_connect_error();
}

$sql_query = 'SELECT email, password FROM form';

$result = mysqli_query($connection,$sql_query);

$registrees = mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($connection);

print_r($registrees);



?>