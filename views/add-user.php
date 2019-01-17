<?php
  include("includes/header.php");
 ?>
 <div class="container">

     <div class="justify-content-center mt-2">
     <!--begin of the form to add users-->
        <form action="../controllers/add-user.php" method="post">
          <div class="form-group">
            <h3> To add user </h3>
            <label>Last name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputlnmae" placeholder="Last name">
          </div>
          <div class="form-group">
            <label>First name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputfname" placeholder="first name">
          </div>

          <div class="form-group">
            <label>Nb of book borrow</label>
            <input type="number" name="nb_book" class="form-control" id="exampleInputnb_book" placeholder="first name">
          </div>
        
          <button type="submit" name="add" class="btn btn-primary">Add-user</button>
        </form>
        <!--the end of the form-->

     </div>
 </div>

<?php
  include("includes/footer.php");
?>
