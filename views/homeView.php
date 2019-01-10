<?php
  include("includes/header.php");

 ?>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-sm-hidden mt-2 user">
                    <img src="../assets/img/user-icon.png">
                </div>
                <div class="col-lg-5 mt-4 button">
                    <p class="text-start"><a href="../controllers/book.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add book</a></p>
                </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-5 user">
                <div class="d-flex justify-content-start">
                       <h5>Welcome</h5>
                    </div>
                    <div class="d-flex justify-content-start">
                       <h5><a href="#">Users</a></h5>
                    </div>
                    <div class="d-flex justify-content-start">
        
                       <h5><a href="#">Diconnect</a></h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <h3>Lists of books</h3>
                    </div>
                    <div class="d-flex justify-content-start">
                    </div>
                    
                    <div class="card-container">
                        <div class="container">
                
                        
                
                            <?php 
                        
                                foreach ($books as $book)     
                                { 
                
                                ?>
                        <div class="card red">
                            <div class="card-content">  
                                <p><?php echo "Title: ".$book->getTitle().'<br>';?></p>
                                <p><?php echo "Author: ".$book->getAuthor().'<br>';?></p>
                                <p><?php echo "Date of publiche: ".$book->getDate().'<br>';?></p>
                                <p><?php echo "Catogery: ".$book->getCatogry().'<br>';?></p>
                                <p><?php echo "Summary: ".$book->getSummary().'<br>';?></p>
                                <p><?php echo "Image: ".$book->getImage().'<br>';?></p>
                
                            </div>
                        </div>
                                <?php
                
                                }
                                
                                ?>
                            
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
                
</div>
    </div>   


