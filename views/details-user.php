<?php
  include("includes/header.php");
 ?>
 <?php
 foreach($users as $user){


 ?>
<div class="container">
  <div class="d-flex justify-content-center mt-2">
      <h4>Details Of user</h4>
    </div>
  <div class="card-container">
    <div class="card">
      <div class="card-content"> 

    <div class="d-flex justify-content-center mt-2 pragraphs">
      <p><?php echo "Last Name: ".$user->getLast_name()?></p>
    </div>
      <div class="d-flex justify-content-center mt-2 pragraphs">
        <p><?php echo "First Name: ". $user->getFirst_name()?></p>
      </div>
      <div class="d-flex justify-content-center mt-2 pragraphs">
        <p><?php echo "Code: ". $user->getCode()?> </p>
      </div>
      <div class="d-flex justify-content-center mt-2 pragraphs">
        <p><?php echo "Number Of Book Borrow: ".$user->getNb_book()?></p>
      </div>
    <div class="d-flex justify-content-center mt-2 pragraphs">
      <p>List of Book borrow: </p>
    </div>

  <div class="d-flex justify-content-center">
    <form action="details_user.php" method="post">
    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
    <button type="submit" name="edit" class="btn btn-danger"><a href="../controllers/edit-user.php?index=<?php echo $user->getId(); ?>">Edit</a></button>
    </form>
  </div>
</div>
</div>
</div>
</div>

<?php
 }
?>
