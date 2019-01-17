<?php
  include("includes/header.php");

 ?>
<div class="container">

    <div class="justify-content-center mt-2">
 <!--begin of the form to add a book-->

    <form action="../controllers/book.php" method="post">
      <div class="form-group">
        <h3> To add a book </h3>
        <label>Title :</label>
        <input type="text" name="title" class="form-control"  value="Title">
      </div>
      <div class="form-group">
        <label>Author :</label>
        <input type="text" name="author" class="form-control"  value="Author">
      </div>
      <label>Date of publish :</label>
        <input type="date" name="date" class="form-control"  value="Date of publish">
    
      <div class="form-group">
        <label for="sel1">Select category:</label>
        <select class="form-control" id="sel1" name="category">
          <option>Choose category</option>
          <option>Science</option>
          <option>History</option>
          <option>True crime</option>
          <option>Horror</option>
        </select>
      </div>
      <div class="form-group">
        <label>Summary :</label>
          <input type="text" name="summary" class="form-control" value="Summary">
      </div>
      <div class="form-group">
        <label>Image :</label>
        <input type="file" name="image" class="form-control">
      </div>
      <button type="submit" name="add" class="btn btn-danger">Add book</button>
    </form>    
   
 <!--the end of the form to add a book-->


    
    
    </div>
</div>

<?php
  require "includes/footer.php";
?>