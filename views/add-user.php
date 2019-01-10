<?php
  include("includes/header.php");
 ?>
 <div class="container">

     <div class="justify-content-center mt-2">
     
     <form action="../controllers/add-users.php" method="post">
       <div class="form-group">
         <h3> To add user </h3>
         <label for="exampleInputEmail1">Last name</label>
         <input type="text" name="last_name" class="form-control" id="exampleInputlnmae" aria-describedby="emailHelp" placeholder="Last name">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">First name</label>
         <input type="text" name="first_name" class="form-control" id="exampleInputfname" placeholder="first name">
       </div>

       <div class="form-group">
         <label for="exampleInputPassword1">Nb of book borrow</label>
         <input type="number" name="nb_book" class="form-control" id="exampleInputfname" placeholder="first name">
       </div>
     
       <button type="submit" name="add" class="btn btn-primary">Add-user</button>
     </form>

     
     
     
     </div>
 </div>


 <?php
   include("includes/footer.php");
  ?>
