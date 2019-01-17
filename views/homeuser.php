<?php
  require "includes/header.php";
?>


<div class="d-flex justify-content-center mt-4">
  <a href="../controllers/add-user.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add user</a>
</div>

<div class="d-flex justify-content-center user ml-2">
  <h3>Lists of users</h3>
</div>
<div class="container">
      
      <?php 
                  
                  foreach($users as $user){//display all users
                    
                    ?>
                    <div class="card-container">
                      <div class="card">
                        <div class="card-content"> 
                            <div class="d-flex justify-content-center">
                              <p>Last name :<?php echo " ".$user->getLast_name();//display last name?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                              <p>First name :<?php echo " ".$user->getFirst_name(); //display first name?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                              <p>Code :<?php echo " ".$user->getCode();//display code?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                              <p> Number of books borrow :<?php echo " ".$user->getNb_book();//display Nb_book?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                              <p> Number of books return :<?php echo " ".$user->getNb_book();//display Nb_book?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                              <p>Details :<a href="details-user.php?index=<?php echo " ".$user->getId();?>">Click to edit</a></p>
                            </div>
                  
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                    ?>  
     
</div>

<?php
  require "includes/footer.php";
?>