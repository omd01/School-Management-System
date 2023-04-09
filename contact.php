<!DOCTYPE html>
<html lang="en">
<?php 
     include "./components/Head.php" ;
     include 'connection.php' ;


if (isset($_POST['submit_message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  mysqli_real_escape_string($conn, $name);
  mysqli_real_escape_string($conn, $email);
  mysqli_real_escape_string($conn, $message);


  $userquery = "INSERT INTO `contact`(`id`, `name`, `email`, `message`) VALUES ('','$name','$email','$message')";

$query = mysqli_query($conn , $userquery);

if($query){
  echo "<script>alert('Student Added Successfully');
  window.location.href= 'contact.php';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'contact.php';</script>";
}
}

?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

 <!-- MENU -->
 <?php include "./components/Navbar.php" ?>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-12">
                   <form id="contact-form" role="form" method="POST">
                        <div class="section-title">
                             <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                             <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
              
                             <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                             <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                             <input type="submit" class="form-control" name="submit_message" value="Send Message">
                        </div>

                   </form>
              </div>

              <div class="col-md-6 col-sm-12">
                   <div class="contact-image">
                        <img src="./images/contact.jpg" class="img-responsive" alt="Smiling Two Girls">
                   </div>
              </div>

         </div>
    </div>
</section>   

   <!-- FOOTER -->
   <?php include "./components/Footer.php" ?>

</body>
</html>