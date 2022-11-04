


<?php include('header.php');?>


<section>
    <div>
<h2> STP form example</h2>
<form action="Database/mySQL.php" method ="POST">

<label>First name:</label>
<input type="text" name="firstName"> <br>

<label>Last name:</label>
<input type="text" name="lastName"> <br>

<label>Email:</label>
<input type="text" name="email"><br>

<label>Password:</label>
<input type="text" name="password"><br>

<input type="submit" value="submit" name="submit" class="btn btn-light">
<br>

</form>
</div>


</section>

<?php include('footer.php');?>

