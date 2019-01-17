<?php
  include("includes/header.php");
 ?>



<div class="container">
    <div class="d-flex justify-content-center mt-2">
      <h4>Details Of Book</h4>
    </div>
    <div class="card-container">
      <div class="card">
        <div class="card-content"> 

            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><?php echo "Title: ".$book->getTitle()?></p>
            </div>
            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><?php echo "Author: ". $book->getAuthor()?></p>
            </div>
            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><?php echo "Category: ". $book->getCategory()?> </p>
            </div>
            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><?php echo "Date of publishement: ".$book->getDate()?></p>
            </div>

            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><?php echo "The summary ".$book->getSummary()?></p>
            </div>

            <div class="d-flex justify-content-center mt-2 pragraphs">
              <p><img style='width: 100px; height: 130px' src="../assets/img/<?php echo $book->getImage();?>" alt="the photo"></p>
            </div>

            <div class="d-flex justify-content-center update">
                <div class='btn btn-danger'>
                  <a href="../controllers/edit_book.php?index=<?php echo $book->getId(); ?>">Edit</a>
                </div>
                 <!--begin of the form to delete a book-->
                <form class="delete" action="bookdetails.php?index=<?php echo $book->getId(); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $book->getId(); ?>">
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
                <!--begin of the form-->
            </div>

            
            <div class="d-flex justify-content-center borrow">
              <!--begin of the form to borrow and return a book-->
              <form class="borrow" action="bookdetails.php?index=<?= $_GET['index'] ?>" method="post">
                <input type="hidden" name="idbook" value='<?= $_GET['index'] ?>'>
                <select name="user_id" required>
                  <option value="" disabled>Choos Users</option>
                   <?php
                   foreach ($users as $user) {//get all the users
                  ?> 
                   <option value="<?php echo $user->getId(); ?>" ><?php echo $user->getFirst_name() . ' ' . $user->getLast_name() ?></option>
                   <?php
                       
                   }
                   ?>  
							
                  </select>
                <button type="submit" name="borrow" value="borrow" class="btn btn-danger">Borrow</button>
                <button type="submit" name="return" value="return" class="btn btn-danger">Return</button>
              </form> 
              <!--the end of the form -->  

            </div>
        </div>
      </div>
    </div>
</div>

<?php
  require "includes/footer.php";
?>