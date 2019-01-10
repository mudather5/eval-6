<?php
  include("includes/header.php");
 ?>
<div class="d-flex justify-content-center mt-2">

<form action="" method="post">
  <div class="form-group">
    <h3> To sign in </h3>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>


</div>

<div class="d-flex justify-content-center mt-2">
   <a href="signup.php">Click here to sign up </a>
</div>

 <?php
   include("includes/footer.php");
  ?>
