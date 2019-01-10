<?php
  include("includes/header.php");
 ?>


<div class="d-flex justify-content-center mt-4">
    <a href="../controllers/add-user.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add user</a>
</div>

<div class="d-flex justify-content-center user ml-2">
       <h3>Lists of users</h3>
   </div>
<div class="container">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Last name</th>
          <th scope="col">First name</th>
          <th scope="col">Code</th>
          <th scope="col">Nb books</th>
          <th scope="col">Details</th>

        </tr>
      </thead>
      <tbody>
          <?php foreach($users as $user){

          ?>
        <tr>
          <th scope="row"></th>
          <td><?php echo $user->getLast_name()?></td>
          <td><?php echo $user->getFirst_name()?></td>
          <td><?php echo $user->getCode()?></td>
          <td><?php echo $user->getNb_book()?></td>
          <td><a href="details-user.php"> Click</a></td>

          
        <?php
          }
        ?>
        
      </tbody>
    </table>
</div>
