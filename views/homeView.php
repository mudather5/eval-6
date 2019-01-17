<?php
  include("includes/header.php");

 ?>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-sm-hidden mt-2 user">
                    <img src="../assets/img/user-icon.png" width="100" height="70" alt="user photo">
                </div>
                <div class="col-lg-5 mt-4 button">
                </div>
            </div>
        </div>    


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-5 user">
                    <div class="d-flex justify-content-start">
                       
                       <h6>Welcome</h6>
                       
                    </div>
                    <div class="d-flex justify-content-start">
                       <h6><a href="../controllers/homeuser.php">Users</a></h6>
                    </div>
                    <div class="d-flex justify-content-start">
        
                       <h6><a href="index.php">Log out</a></h6>
                    </div>
                </div>
            </div>
    
               <div class="d-flex justify-content-center">
                    <a href="../controllers/book.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" onmouseover="mOver(this)" onmouseout="mOut(this)">Add book</a>

                </div> 
                    <div class="d-flex justify-content-center">
                       <h3> Lists of books</h3>
                    </div>    
                    
                    <div class="card-container">
                        <div class="container">
                            <div class="row book">
                
                        
                
                            <?php 
                        
                                foreach ($books as $book)     
                                { //display all the book 
                
                                ?>
                            <div class="red">
                                <div class="card-content">
                                <a class="simple-ajax-popup-align-top"  href="../assets/img/<?= $book->getImage();?>" title='Caption. Can be aligned to any side and contain any HTML.'>
                                    <img style='width: 130px; height: 160px' src="../assets/img/<?= $book->getImage(); ?>" alt="the book" onmouseover="photoOver(this)" onmouseout="photoOut(this)">
                                </a>
                                    <p class="title"><?php echo $book->getTitle().'<br>';//display the title?><a href="../controllers/bookdetails.php?index=<?php echo $book->getId(); ?>">Click for details</a></p>
                                </div>
                            </div>
                                <?php //the end of the loop
                
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                
        </div>  
    
    
    <?php
        include("includes/footer.php");
    ?>

