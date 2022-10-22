<?php
include "connection.php";

$error="";
if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $sql = "INSERT INTO * customers_tb (first_name, last_name, email, password, mobile)
    Values ('$first_name', '$last_name', '$email', '$password', '$mobile')";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        header("location:signin.php");
    } else {
        $error="Error in inserting data";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Busan Tech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Busan Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Webinar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Resources</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
         <a class="nav-link" href="#">Welcome</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>    
  </div>
</nav>
<p><br></p>

<div class="container">
    <div class="jumbotron">
      <p class="lead">Sign up</p>
      <div class="container">
  <form action="/action_page.php">
    <div class="form-group">
        <div class="form-group">
      <label for="first_name">firstname:</label>
      <input type="first_name" class="form-control" id="first_name" placeholder="Enter firstname" name="first_name">
    </div>
    <div class="form-group">
      <label for="last_name">lastname:</label>
      <input type="last_name" class="form-control" id="last_name" placeholder="Enter lastname" name="last_name">
    </div>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="mobile">mobile:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

