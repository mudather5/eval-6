<?php
  include("includes/header.php");
 ?>
 
<div class="container">
  <div class="d-flex justify-content-center mt-2">
    <h4>Details Of user</h4>
  </div>
  <div class="card-container">
    <div class="card">
      <div class="card-content"> 

          <div class="d-flex justify-content-center mt-2 pragraphs">
            <p><?php echo "Last Name: ".$user->getLast_name();//display Last_name?></p>
          </div>
          <div class="d-flex justify-content-center mt-2 pragraphs">
            <p><?php echo "First Name: ". $user->getFirst_name(); //display First_name?></p>
          </div>
          <div class="d-flex justify-content-center mt-2 pragraphs">
            <p><?php echo "Code: ". $user->getCode()?> </p>
          </div>
          <div class="d-flex justify-content-center mt-2 pragraphs">
            <p><?php echo "Number Of Book Borrow: ".$user->getNb_book(); //display Nb_book?></p>
          </div>
          <div class="d-flex justify-content-center mt-2 pragraphs">
            <p><?php echo "Number Of Book Borrow: ".$user->getLists_books();//Lists_books?></p>
          </div>

          <div class="d-flex justify-content-center">
                <div class='btn btn-danger'>
                  <a href="../controllers/edit-user.php?index=<?php echo $user->getId(); ?>">Edit</a>
                </div>
          <!--begin of the form for deleting -->
            <form class="delete" action="details-user.php?index=<?php echo $user->getId(); ?>" method="post">
              <input type="hidden" name="id" value="<?php echo $user->getId();?>">
              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </form>
            <!--end of the form for deleting -->

          </div>
      </div>
    </div>
  </div>
</div>


<?php
  require "includes/footer.php";
?>