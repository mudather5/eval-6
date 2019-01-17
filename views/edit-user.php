<?php
  include("includes/header.php");
 ?>
 <div class="container edit">

     <div class="justify-content-center mt-2">
    <!--start of form--> 
     <form action="../controllers/edit-user.php?index=<?php echo $user->getId(); ?>" method="post">
       <div class="form-group">
         <h3> To change information of user </h3>
         <label>Last name</label>
         <input type="hidden" name="id" value="<?php echo $user->getId();?>">
         <input type="text" name="last_name" class="form-control" id="exampleInputlnmae" value="<?php echo $user->getLast_name();//display last name ?>">
       </div>
       <div class="form-group">
         <label>First name</label>
         <input type="text" name="first_name" class="form-control" id="exampleInputfname" value="<?php echo $user->getFirst_name(); //display first name in form ?>">
       </div>
       <button type="submit" name="edit" class="btn btn-danger">Edit</button>
     </form>
         <!--end of form--> 

     
     </div>
 </div>


<?php
  include("includes/footer.php");
?>



