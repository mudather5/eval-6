<?php
  include("includes/header.php");
 ?>

<div class="d-flex justify-content-center mt-2">
  <!--the start of form for signin-->

  <form action="../controllers/index.php" method="post">
    <div class="form-group">
      <h3> To sign in </h3>
      <div class="d-flex justify-content-center mt-2 error">

          <?php
              foreach($errors as $error){//disply the errors
            ?>
              <p class="error-message"> <?php echo $error; ?></p>
            <?php
              }
            ?>
      </div>      
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" name="login" class="btn btn-danger">Submit</button>
  </form>
  <!--the end of form for signin-->


</div>

<div class="d-flex justify-content-center mt-2">
  <a href="signup.php">Click here to sign up </a>
</div>

<?php
  include("includes/footer.php");
?>
