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

  <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
</form>


</div>

<div class="d-flex justify-content-center mt-2">
   <h3> To sign up </h3>
</div>


<div class="d-flex justify-content-center mt-2">

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" name="firstname" class="form-control" id="name" aria-describedby="First name" placeholder="First name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>

 <?php
   include("includes/footer.php");
  ?>
