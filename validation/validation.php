<?php 
if(isset($_POST['submit'])){

    $firstName = htmlspecialchars($_POST['firstName']) ;
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['emailail']);
    $password =htmlspecialchars($_POST['password']);

    $error_counter =0;

    if(!preg_match('/^[a-zA-Z\s]{3,}$/' , $firstName)){
        $error_counter ++;
        
    }
    if(!preg_match( '/^[a-zA-Z\s]{3,}$/', $lastName)){
        $error_counter ++;

    }
     if(!preg_match( '/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/i', $email)){
         $error_counter ++;

     }
    if(!preg_match( '/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)(?=.*?[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)){
        $error_counter ++;

       

    }

    if($error_counter == 0){
        include( '../Database/mySQL.php');

    }else{
        header('location: ../form/Error.php');

    }

}



?>