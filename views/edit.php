<?php
  include("includes/header.php");
 ?>
<div class="container">

    <div class="justify-content-center mt-2">
    
    <form action="" method="post">
      <div class="form-group">
        <h3> To edit a book </h3>
        <label for="exampleInputEmail1">Title :</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Author :</label>
        <input type="text" name="author" class="form-control" id="exampleInputPassword1" placeholder="Author">
      </div>
      <label for="exampleInputEmail1">Date of publish :</label>
        <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date of publish">
    
      <div class="form-group">
        <label for="exampleInputPassword1">Catogry :</label>
        <input type="text" name="catogry" class="form-control" id="exampleInputPassword1" placeholder="Author">
      </div>
    
      <label for="exampleInputEmail1">Summary :</label>
        <input type="text" name="summary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Summary">
    
      <div class="form-group">
        <label for="exampleInputPassword1">Image :</label>
        <input type="text" name="image" class="form-control" id="exampleInputImage" placeholder="Image">
      </div>
    
      <div class="form-group">
        <label for="exampleInputPassword1">Alt :</label>
        <input type="text" name="alt" class="form-control" id="exampleInputAlt" placeholder="Alt">
      </div>
    
    
    
      <button type="submit" name="add" class="btn btn-danger">Edit book</button>
    </form>
    
    
    </div>
</div>
