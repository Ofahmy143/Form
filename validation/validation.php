<?php 
if(isset($_POST['submit'])){

    $fn = htmlspecialchars($_POST['firstName']) ;
    $ln = htmlspecialchars($_POST['lastName']);
    $em = htmlspecialchars($_POST['email']);
    $pw =htmlspecialchars($_POST['password']);

    $error_counter =0;

    if(!preg_match('/^[a-zA-Z\s]{3,}$/' , $fn)){
        $error_counter ++;
        
    }
    if(!preg_match( '/^[a-zA-Z\s]{3,}$/', $ln)){
        $error_counter ++;

    }
     if(!preg_match( '/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/i', $em)){
         $error_counter ++;

     }
    if(!preg_match( '/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)(?=.*?[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $pw)){
        $error_counter ++;

       

    }

    if($error_counter == 0){
        include( '../Database/mySQL.php');

    }else{
        header('location: ../form/Error.php');

    }

}



?>