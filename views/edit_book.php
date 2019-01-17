<?php
include("includes/header.php");
?>

<div class="container">

  <div class="justify-content-center mt-2">
  <!--the begin of the form-->  
    <form action="../controllers/edit_book.php?index=<?php echo $book->getId(); ?>" method="post">
      <div class="form-group">
        <label>Title :</label>
        <input type="hidden" name="id">
        <input type="text" value="<?php echo $book->getTitle(); ?>" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label>Author :</label>
        <input type="text" name="author" class="form-control" value="<?php echo $book->getAuthor(); ?>">
      </div>
      <label>Date of publish :</label>
        <input type="date" name="date" class="form-control" value="<?php echo $book->getDate(); ?>">
    
      <div class="form-group">
        <label>Catogry :</label>
        <input type="text" name="category" value="<?php echo $book->getCategory(); ?>" class="form-control">
      </div>
    
      <label>Summary :</label>
        <input type="text" name="summary" value="<?php echo $book->getSummary(); ?>" class="form-control">
      <div class="form-group">
        <label>Image :</label>
        <input type="file" name="image">
      </div>
    
      <button type="submit" name="edit" class="btn btn-danger">Edit book</button>
    </form>
    <!--the end of the form-->  
  
  </div>
</div>

<?php
   include("includes/footer.php");
?>
