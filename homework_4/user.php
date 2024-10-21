<?php

include "connect.php";

if(!$conn){
  die(mysqli_connect_error());
}

if(isset($_POST['submit'])){

  $name = $_POST['username'];
  $email = $_POST['email'];

  $sql = "INSERT INTO users (username, email) VALUES ('$name', '$email')";
  $result = mysqli_query($conn,$sql);

  if($result){
    header("Location: index.php?success=user inserted successfully");
  }else{
    echo "sorry user didnt insert";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-8">
        <h2>Adding user form</h2>
        <form class="my-5" method="POST">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="name" name="username" class="form-control" id="exampleInputPassword1" placeholder="Enter your username">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>