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

$firstName = mysqli_real_escape_string($connection,htmlspecialchars($_POST['firstName']));
$lastName = mysqli_real_escape_string($connection,htmlspecialchars($_POST['lastName']));
$email = mysqli_real_escape_string($connection,htmlspecialchars($_POST['email']));
$password = mysqli_real_escape_string($connection,htmlspecialchars($_POST['password']));

$sql_query2 = "INSERT INTO form(first_name,last_name,email,password) VALUES('$firstName'
,'$lastName','$email','$password')";




$email_vaildation = "SELECT * FROM form WHERE email = '$email'";
$email_result = mysqli_fetch_all(mysqli_query($connection,$email_vaildation),MYSQLI_ASSOC);
if(empty($email_result)){

    if(mysqli_query($connection,$sql_query2)){
        header('location: ../form/index.php');
        //sucesss
    }else{
        echo 'Error' . mysqli_error($connection);
    }
    

}else {
    echo 'Email already in the database';
    header('location: ../form/index.php');

}



include('db_disconnect.php');


?>