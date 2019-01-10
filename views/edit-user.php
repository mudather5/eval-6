<?php
  include("includes/header.php");
 ?>
 <div class="container">

     <div class="justify-content-center mt-2">
     
     <form action="../controllers/edit-user.php?index=<?php echo $user->getId(); ?>" method="post">
       <div class="form-group">
         <h3> To change information of user </h3>
         <label for="exampleInputEmail1">Last name</label>
         <input type="text" name="last_name" class="form-control" id="exampleInputlnmae" aria-describedby="emailHelp" value="<?php echo $user->getLast_name(); ?>">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">First name</label>
         <input type="text" name="first_name" class="form-control" id="exampleInputfname" value="<?php echo $user->getFirst_name(); ?>">
       </div>
     
       <button type="submit" name="edit" class="btn btn-danger">Edit</button>
     </form>
     
     
     </div>
 </div>


 <?php
   include("includes/footer.php");
  ?>
