
<?php 
include('db_connect.php');

$connection = mysqli_connect('localhost','fahmy','test1234','stp');

//check connection
if(!$connection){
    echo 'Connection error' . mysqli_connect_error();
}





$email_vaildation = "SELECT * FROM form WHERE email = '$email'";
$email_result = mysqli_fetch_all(mysqli_query($connection,$email_vaildation),MYSQLI_ASSOC);


if(empty($email_result) == 1 ){



    $firstName = mysqli_real_escape_string($connection,$firstName);
    $lastName = mysqli_real_escape_string($connection,$lastName);
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);
    
    $sql_query2 = "INSERT INTO form(first_name,last_name,email,password) VALUES('$firstName'
    ,'$lastName','$email','$password')";



    if(mysqli_query($connection,$sql_query2)){
        header('location: ../form/Success.php');
        //sucesss
    }else{

        echo 'Error' . mysqli_error($connection);
    }
    

}else {
    header('location: ../form/Error.php');

    echo 'Email already in the database   ';
    
}



include('db_disconnect.php');


?>