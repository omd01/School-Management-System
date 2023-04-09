<?php
  include 'components/header.php';
  include "connection.php";

  if(empty($_SESSION['user_data'])){
    header('location:login.php');}

    $students_sql = "SELECT * FROM `students`";
    $students_result = mysqli_query($conn, $students_sql);
    $students = mysqli_num_rows($students_result);

    $teachers_sql = "SELECT * FROM `teachers`";
    $teachers_result = mysqli_query($conn, $teachers_sql);
    $teachers = mysqli_num_rows($teachers_result);

    $library_sql = "SELECT * FROM `library`";
    $library_result = mysqli_query($conn, $library_sql);
    $library = mysqli_num_rows($library_result);

    $messages_sql = "SELECT * FROM `contact`";
    $messages_result = mysqli_query($conn, $messages_sql);
    $messages = mysqli_num_rows($messages_result);
?>


<main class="d-flex flex-nowrap">
<slider class="flex-shrink-0 p-3" style="width: 280px;">
  
  <a href="index.php" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
  <span class="fs-5 ms-3 fw-semibold">S.S.N.H.J</span>
  </a>

  <ul class="list-unstyled ps-0">

      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
          Dashboard
        </button>
        <div class="collapse show " id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
            <!-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li> -->
          </ul>
        </div>
      </li>

      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#teachers-collapse" aria-expanded="false">
          Teachers
        </button>
        <div class="collapse " id="teachers-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="teachers.php#all_list" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All List</a></li>
            <li><a href="teachers.php#add_new" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
            <li><a href="teachers.php#update_user" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update</a></li>
          </ul>
        </div>
      </li>

      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="false">
          Students
        </button>
        <div class="collapse" id="students-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="students.php#all_list" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All List</a></li>
            <li><a href="students.php#add_new" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Add New</a></li>
            <li><a href="students.php#update_user" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update</a></li>
          </ul>
        </div>
      </li>

      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#library-collapse" aria-expanded="false">
          Library
        </button>
        <div class="collapse" id="library-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="library.php#all_books" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All Books Available</a></li>
            <li><a href="library.php#add_new" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Add New Books</a></li>
            <li><a href="library.php#update_books" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update Database</a></li>
          
          </ul>
        </div>
      </li>
<!-- 
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#website-collapse" aria-expanded="false">
          Website
        </button>
        <div class="collapse" id="website-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="website.php#home" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Home</a></li>
            <li><a href="website.php#our-teachers" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Our Teachers</a></li>
            <li><a href="website.php#courses" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Courses</a></li>
          
          </ul>
        </div>
      </li> -->
      
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#contact-data-collapse" aria-expanded="false">
          Contact Data
        </button>
        <div class="collapse" id="contact-data-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="contact-data.php#form-data" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Form Data</a></li>
          </ul>
        </div>
      </li>
      
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <!-- <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New..</a></li> -->
            <!-- <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li> -->
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
            <li><a href="logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
  </ul>

</slider>
<div class="b-example-divider b-example-vr"></div>


<!-- main body code start-->
<div class="min-vh-100 w-100 py-5 px-4">
<div class="h-100">

  <div class="row">
    <div class="col-sm-3 mb-3 mb-sm-0 ">
      <div class="card shadow px-3">
        <div class="card-body my-2">
        <p class="card-text">Total Students</p>
          <h2 class="card-title"><?php echo $students ?></h2>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3 ">
      <div class="card shadow px-3">
        <div class="card-body my-2">
        <p class="card-text">Total Teachers</p>
          <h2 class="card-title"><?php echo $teachers ?></h2>
          
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3 ">
      <div class="card shadow px-3">
        <div class="card-body my-2">
        <p class="card-text">Total Books</p>
          <h2 class="card-title"><?php echo $library ?></h2>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-3 ">
      <div class="card shadow px-3">
        <div class="card-body my-2">
        <p class="card-text">Total Messages</p>
          <h2 class="card-title"><?php echo $messages ?></h2>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
  </div>

  <div class="column my-4 w-100 h-100">
  <iframe class="f1 shadow" src="http://localhost/school" title="description"></iframe>
  <iframe  class="f2 shadow" src="http://localhost/school" title="description"></iframe>
  </div>

 

</div>
<!-- main body code end-->

<style>
  .column{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

.f1{
  width: 32%;
  height: 80%;
}

.f2{
  width: 66%;
  height: 80%;
  border: none;
}

</style>

</main>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/sidebars.js"></script>
</body>
</html>

