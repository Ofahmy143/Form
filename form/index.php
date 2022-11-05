

<?php include('header.php');?>



<section>
    <div>
<h2> STP form example</h2>
<form action="../validation/validation.php" method ="POST">

<label>First name:</label>
<input type="text" name="firstName"> 
<p>Alphabetic can contain spaces but no numbers or special character</p>

<label>Last name:</label>
<input type="text" name="lastName"> 
<p>Alphabetic can contain spaces but no numbers or special character</p>

<label>Email:</label>
<input type="text" name="email">
<p>Enter a valid email ex: myEmail@mydomain.com Must be not registered in our database</p>


<label>Password:</label>
<input type="text" name="password"> 
<p>Alphanumeric must contain at least 8 characters one uppercase , one lowercase , number and a special character</p>


<input type="submit" value="submit" name="submit" class="btn btn-light">
<br>

</form>
</div>


</section>

<?php include('footer.php');?>

