
<?php
include 'connection.php';

session_start();
if(!empty($_SESSION["user_data"])){
  header('location:index.php');
}

if (isset($_POST['login'])) {
  $user_id  = $_POST['user_id'];
  $password = $_POST['password'];
  mysqli_real_escape_string($conn, $user_id);
  mysqli_real_escape_string($conn, $password);

  $userquery = "SELECT * FROM admin WHERE user_id = '$user_id'";

$query = mysqli_query($conn , $userquery);
if($result = mysqli_fetch_array($query)){
  $db_pass = $result['password'];
  if($db_pass === $password){
  $_SESSION["user_data"] = $result;
  header("location:index.php");
 }
}

else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login Admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" >
    <form class="form-signin shadow py-5" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Admin Log-in</h1>
<diV class="text-start">
      <label for="inputEmail" class="sr-only" name="user_id" >User id</label>
      <input type="text" id="inputEmail" name="user_id"  class="form-control" placeholder="Email address" required="" autofocus="">

      <label for="inputPassword" class="sr-only mt-3 ">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
</diV>
      <button class="btn btn-lg btn-primary btn-block my-2" name="login" type="submit">Log In</button>
      <p class=" text-muted">Only Admin Can Access</p>
    </form>
  
</body></html>