<?php
require_once('connect.php');

if (isset($_POST['go'])){
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$sql = "INSERT INTO users (username, password, firstname, lastname)
VALUES ('$username', '$password', '$firstname', '$lastname')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Material Register Form</h1><span>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Register</h1>
    <form name=loginform method=post>
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="username" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}"  name="password" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
       <div class="input-container">
        <input type="#{type}" id="#{label}"  name="firstname" required="required"/>
        <label for="#{label}">First Name</label>
        <div class="bar"></div>
      </div>
       <div class="input-container">
        <input type="#{type}" id="#{label}"  name="lastname" required="required"/>
        <label for="#{label}">Last Name</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="go"><span>Go</span></button>
      </div>
      
    </form>
  </div>
 
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
