<?php 
include 'components/header.php';
include 'connection.php' ?>
<?php 



if (isset($_POST['add_new_book'])) {
  $book_name = $_POST['book_name'];
  $book_author = $_POST['book_author'];
  $book_price = $_POST['book_price'];

  mysqli_real_escape_string($conn, $book_name);
  mysqli_real_escape_string($conn, $book_author);
  mysqli_real_escape_string($conn, $book_price);


  $userquery = "INSERT INTO `library`(`book_id`, `book_name`, `book_author`, `book_price`) VALUES ('','$book_name','$book_author','$book_price')";

$query = mysqli_query($conn , $userquery);

if($query){
  echo "<script>alert('New Book Added Successfully');
  window.location.href= 'library.php#add_new';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'library.php#add_new';</script>";
}
}



if (isset($_POST['update_teacher'])) {
  $user_id = $_POST['user_id'];
  $book_name = $_POST['book_name'];
  $book_author = $_POST['book_author'];
  $book_price = $_POST['book_price'];
  $education = $_POST['education'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $gender = $_POST['gender'];
  mysqli_real_escape_string($conn, $user_id);
  mysqli_real_escape_string($conn, $book_name);
  mysqli_real_escape_string($conn, $book_author);
  mysqli_real_escape_string($conn, $book_price);
  mysqli_real_escape_string($conn, $education);
  mysqli_real_escape_string($conn, $address);
  mysqli_real_escape_string($conn, $mobile);
  mysqli_real_escape_string($conn, $gender);

$update_user_query = "UPDATE `teachers` SET `book_name`='$book_name',`book_author`='$book_author',`book_price`='$book_price',`education`='$education',`mobile`='$mobile',`gender`='$gender',`address`='$address' WHERE `teacher_id` = '$user_id'";

$update_query = mysqli_query($conn , $update_user_query);

if($update_query){
  echo "<script>alert('Data Updated Successfully');
  window.location.href= 'teachers.php#update_user';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'teachers.php#update_user';</script>";
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

        <!-- <li class="mb-1">
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
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
    </ul>

  </slider>
<div class="b-example-divider b-example-vr"></div>

<!-- main body code start-->

<div class="main_container py-4 px-4 w-100">

  <!-- all books list -->
  <div class="full_block py-4 " id="all_books">
    <table class="table table-hover shadow">
      <thead>
        <tr class="table-dark">
          <th scope="col">id</th>
          <th scope="col">Book Name</th>
          <th scope="col">Author name</th>
          <th scope="col">Price</th>
          <th scope="col">Issued to</th>
        </tr>
      </thead>

      <tbody class="table-group-divider">
        <?php 
        $sql = "SELECT * FROM `library`";
        $result = mysqli_query($conn, $sql);
        if($result){
          foreach($result as $value){
            echo "<tr>";
            echo "<td>".$value['book_id']."</td>";
            echo "<td>".$value['book_name']."</td>";
            echo "<td>".$value['book_author']."</td>";
            echo "<td>".$value['book_price']."</td>";
            echo "<td>".$value['issued_to']."</td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- add new books -->
  <div class="full_block py-4 px-4" id="add_new">
    <main class=" mx-2 my-3 shadow rounded">
    <div class="py-3 text-center"><h4>Add New Book's</h4></div>
    <hr class="my-3">

    <form class="needs-validation col-12 px-5" method="POST" novalidate>

      <div class="row g-3">

        <div class="col-sm-6">
          <label for="bookName" class="form-label">Book name</label>
          <input type="text" class="form-control" id="bookName" name="book_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="bookAuthor" class="form-label">Author name</label>
          <input type="text" class="form-control" id="bookAuthor" name="book_author" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="bookPrice" class="form-label">Book Price</label>
        
            <input type="text" class="form-control" id="bookPrice" name="book_price" placeholder="" required>
          <div class="invalid-feedback">
              Your fathers name is required.
            </div>
          
        </div>

      </div>

      <hr class="my-5">
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="add_new_book">Add Data</button>
    </form>
    </main>
  </div>

<!-- update books  -->
<div class="full_block py-4 " id="update_books">
<table class="table table-hover shadow">
    <thead>
      <tr class="table-dark">
        <th scope="col">id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Author name</th>
        <th scope="col">Price</th>
        <th scope="col">Issued to</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>

    <tbody class="table-group-divider">
      <?php 
      $sql = "SELECT * FROM `library`";
      $result = mysqli_query($conn, $sql);
      if($result){
        foreach($result as $value){
          echo "<tr>";
          echo "<td>".$value['book_id']."</td>";
          echo "<td>".$value['book_name']."</td>";
          echo "<td>".$value['book_author']."</td>";
          echo "<td>".$value['book_price']."</td>";
          echo "<td>".$value['issued_to']."</td>";
          echo "<td><button type='button' class='btn btn-success btn-sm'>Update</button><td>";
          echo "<td><a href='delete.php?delete_id=".$value['book_id']."'><button type='button' type='submit' class='btn btn-danger btn-sm'>Delete</button><a><td>";
          echo "</tr>";
        }
      }
      ?>
    </tbody >
  </table>
</div>

</div>
<!-- main body code end-->


</main>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/sidebars.js"></script>
</body>
</html>

