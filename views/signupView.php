<?php
  include("includes/header.php");
 ?>
<div class="d-flex justify-content-center mt-2">
   <h3> To sign up </h3>
</div>
<div class="d-flex justify-content-center mt-2">
  <?php
		foreach($errors as $error){//dispy the errors
	?>
		<p class="error-message"> <?php echo $error; ?></p>
	<?php
		}
  ?>


</div>


<div class="d-flex justify-content-center mt-2">

<!--the start of form for signup-->

<form action="signup.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" name="first_name" class="form-control" id="name" placeholder="First name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="password_1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-danger">Submit</button>
</form>
<!--the end of form for signup-->


</div>


<?php
  require "includes/footer.php";
?>