// if(isset($_POST['submit'])){
//     // dp this to avoid malicous code
//     echo htmlspecialchars($_POST['firstName']); 
//     echo htmlspecialchars($_POST['lastName']);
//     echo htmlspecialchars($_POST['email']);
//     echo htmlspecialchars($_POST['password']);

// }



//$sql_query = 'SELECT email, password FROM form';

//$result = mysqli_query($connection,$sql_query);

//$registrees = mysqli_fetch_all($result,MYSQLI_ASSOC);

//mysqli_free_result($result);

//mysqli_close($connection);

//print_r($registrees);






<?php 
include('db_connect.php');

$connection = mysqli_connect('localhost','fahmy','test1234','stp');

//check connection
if(!$connection){
    echo 'Connection error' . mysqli_connect_error();
}

$firstName = mysqli_real_escape_string($connection,$_POST['firstName']);
$lastName = mysqli_real_escape_string($connection,$_POST['lastName']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

$sql_query2 = "INSERT INTO form(first_name,last_name,email,password) VALUES('$firstName'
,'$lastName','$email','$password')";


if(mysqli_query($connection,$sql_query2)){
    header('location: ../index.php');
    echo'SUCCESS';
    //sucesss
}else{
    echo 'Error' . mysqli_error($connection);
}

include('db_disconnect.php');


?>