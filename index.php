



<?php include('header.php');?>

<section>
<form action="mySQL.php" method ="POST">

<label>First name:</label>
<input type="text" name="firstName"> <br>

<label>Last name:</label>
<input type="text" name="lastName"> <br>

<label>Email:</label>
<input type="text" name="email"><br>

<label>Password:</label>
<input type="text" name="password"><br>

<input type="submit" value="submit" name="submit" class="btn btn-primary">
<br>

</form>

</section>

<?php include('footer.php');?>

