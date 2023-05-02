<?php 
include 'components/header.php';
include 'connection.php' ?>
<?php 

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $userquery = "SELECT * FROM `library` WHERE `book_id` = '$id'";
  $query = mysqli_query($conn , $userquery);

  if($result = mysqli_fetch_array($query)){
    $db_book_name =  $result['book_name'];
    $db_book_author =  $result['book_author'];
    $db_book_price =  $result['book_price'];
    $db_book_issued = $result['issued_to'];
}
}

if (isset($_POST['update_book'])) {
  $book_name = $_POST['book_name'];
  $book_author = $_POST['book_author'];
  $book_price = $_POST['book_price'];
  $issued_to = $_POST['issued_to'];

  mysqli_real_escape_string($conn, $book_name);
  mysqli_real_escape_string($conn, $book_author);
  mysqli_real_escape_string($conn, $book_price);
    mysqli_real_escape_string($conn, $issued_to);


  $userquery = "UPDATE `library` SET  `book_name`='$book_name', `book_author`='$book_author', `book_price`='$book_price',`issued_to`='$issued_to' WHERE `book_id` = '$id'";

$query = mysqli_query($conn , $userquery);

if($query){
  echo "<script>alert('Update Successfully');
  window.location.href= 'library.php#add_new';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'library.php#add_new';</script>";
}
}



?>

<main class="d-flex flex-nowrap">
  <slider class="flex-shrink-0 p-3" style="width: 280px;">
  
    <a href="index.php" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
    <span class="fs-5 ms-3 fw-semibold">S.S.N.H.J</span>
    </a>

    <ul class="list-unstyled ps-0">

        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
          </button>
          <div class="collapse " id="dashboard-collapse">
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
          <div class="collapse " id="students-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="students.php#all_list" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All List</a></li>
              <li><a href="students.php#add_new" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Add New</a></li>
              <li><a href="students.php#update_user" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#library-collapse" aria-expanded="true">
            Library
          </button>
          <div class="collapse show " id="library-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="library.php#all_books" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All Books Available</a></li>
              <li><a href="library.php#add_new" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Add New Books</a></li>
              <li><a href="library.php#update_books" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update Database</a></li>
            
            </ul>
          </div>
        </li>

      
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
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
    </ul>

  </slider>
<div class="b-example-divider b-example-vr"></div>

<!-- main body code start-->

<div class="main_container py-4 px-4 w-100">

  <!-- Update Book -->
  <div class="full_block py-4 px-4" id="add_new">
    <main class=" mx-2 my-3 shadow rounded">
    <div class="py-3 text-center"><h4>Update Book</h4></div>
    <hr class="my-3">

    <form class="needs-validation col-12 px-5" method="POST" novalidate>

      <div class="row g-3">

        <div class="col-sm-6">
          <label for="bookName" class="form-label">Book name</label>
          <input type="text" class="form-control" id="bookName" name="book_name" placeholder="" value="<?php echo $db_book_name;?>" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="bookAuthor" class="form-label">Author name</label>
          <input type="text" class="form-control" id="bookAuthor" name="book_author" placeholder="" value="<?php echo $db_book_author;?>" required>
          <div class="invalid-feedback">
            Valid  name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="bookPrice" class="form-label">Book Price</label>
        
            <input type="text" class="form-control" id="bookPrice" name="book_price" placeholder="" value="<?php echo $db_book_price;?>" required>
          <div class="invalid-feedback">
              Your Price is required.
            </div>
          
        </div>
        <div class="col-sm-6">
          <label for="issuedTo" class="form-label">Book Issued To</label>
        
            <input type="text" class="form-control" id="issuedTo" name="issued_to" placeholder="" value="<?php echo $db_book_issued;?>" required>
          <div class="invalid-feedback">
              Your  name is required.
            </div>
          
        </div>

      </div>

      <hr class="my-5">
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="update_book">Update</button>
    </form>
    </main>
  </div>


<!-- main body code end-->


</main>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/sidebars.js"></script>
</body>
</html>

