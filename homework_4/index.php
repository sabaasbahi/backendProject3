<?php

include "connect.php";
include "function.php";

$result = display_data();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/css/style.css">


  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 text-center">
          <button class="btn btn-primary"><a href="user.php" class="text-light">Create User</a></button>
        </div>
        <div class="col-lg-3 ">
        <?php
    
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success error_alert" role="alert">
      '. $_GET['success'] .'
      </div>';
    }
    ?>
        </div>
      </div>
      <div class="row justify-content-center">
     <div class="col-lg-8">
      <div class="card mt-5">
        <div class="card-header">
        <h2 class="text-center text-secondary">User İnformation Form</h2>
        </div>
      </div>
      <div class="card-body">
      <table class="table table-bordered table-primary table-striped text-center" id="example">
        <thead class="table-dark">
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)){

              $id= $row['id'];
              $username= $row['username'];
              $email= $row['email'];

              echo '<tr>

              <td>'.$id.'</td>
              <td>'.$username.'</td>
              <td>'.$email.'</td>
              <td><button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light">Edit</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
              </td>             
              </tr>';
            }
              
              ?>

              <!-- <td><button class="btn btn-primary"><a href="" class="text-light">Edit</a></button></td>
              <td><button class="btn btn-danger"><a href="delete.php" class="text-light">Delete</a></button></td>
              </tr> -->
              
          
        </tbody>
      </table>
      </div>
    </div>
  </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>