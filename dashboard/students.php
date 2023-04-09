<?php 
include 'components/header.php';
include 'connection.php' ?>
<?php 

if (isset($_POST['add_student'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $fathers_name = $_POST['fathers_name'];
  $roll_no = $_POST['roll_no'];
  $class = $_POST['class'];
  $address = $_POST['address'];
  $parents_mo = $_POST['parents_mo'];
  $gender = $_POST['gender'];
  mysqli_real_escape_string($conn, $first_name);
  mysqli_real_escape_string($conn, $last_name);
  mysqli_real_escape_string($conn, $fathers_name);
  mysqli_real_escape_string($conn, $roll_no);
  mysqli_real_escape_string($conn, $class);
  mysqli_real_escape_string($conn, $address);
  mysqli_real_escape_string($conn, $parents_mo);
  mysqli_real_escape_string($conn, $gender);

  $userquery = "INSERT INTO `students`(`student_id`,`first_name`, `last_name`, `fathers_name`, `roll_no`, `class`, `address`, `parents_mo`, `gender`) VALUES ('','$first_name','$last_name','$fathers_name',$roll_no,'$class','$address','$parents_mo','$gender')";

$query = mysqli_query($conn , $userquery);

if($query){
  echo "<script>alert('Student Added Successfully');
  window.location.href= 'students.php#add_new';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'students.php#add_new';</script>";
}
}

if (isset($_POST['update_student'])) {
  $user_id = $_POST['user_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $fathers_name = $_POST['fathers_name'];
  $roll_no = $_POST['roll_no'];
  $class = $_POST['class'];
  $address = $_POST['address'];
  $parents_mo = $_POST['parents_mo'];
  $gender = $_POST['gender'];
  mysqli_real_escape_string($conn, $user_id);
  mysqli_real_escape_string($conn, $first_name);
  mysqli_real_escape_string($conn, $last_name);
  mysqli_real_escape_string($conn, $fathers_name);
  mysqli_real_escape_string($conn, $roll_no);
  mysqli_real_escape_string($conn, $class);
  mysqli_real_escape_string($conn, $address);
  mysqli_real_escape_string($conn, $parents_mo);
  mysqli_real_escape_string($conn, $gender);

  $update_user_query = "UPDATE `students` SET `first_name`='$first_name',`last_name`='$last_name',`fathers_name`='$fathers_name',`roll_no`='$roll_no',`class`='$class',`address`='$address',`parents_mo`='$parents_mo',`gender`='$gender' WHERE `student_id` = '$user_id'";

$update_query = mysqli_query($conn , $update_user_query);

if($update_query){
  echo "<script>alert('Data Updated Successfully');
  window.location.href= 'students.php#update_user';</script>";
}
else{
  echo "<script>alert('Somthing Went Wrong');
  window.location.href= 'students.php#update_user';</script>";
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
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="true">
            Students
          </button>
          <div class="collapse show " id="students-collapse">
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
              <li><a href="logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
    </ul>

  </slider>
  <div class="b-example-divider b-example-vr"></div>


<div class="main_container py-4 px-4 w-100 ">

  <!-- list of students -->
    <div class="full_block py-4 " id="all_list">
      <table class="table table-hover shadow ">
        <thead>
          <tr class="table-dark">
            <th scope="col">id</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Fathers name</th>
            <th scope="col">Class</th>
            <th scope="col">Roll no.</th>
            <th scope="col">Gender</th>
            <th scope="col">Parents Mo.</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php 
          $sql = "SELECT * FROM `students`";
          $result = mysqli_query($conn, $sql);
          if($result){
            foreach($result as $value){
              echo "<tr>";
              echo "<td>".$value['student_id']."</td>";
              echo "<td>".$value['first_name']."</td>";
              echo "<td>".$value['last_name']."</td>";
              echo "<td>".$value['fathers_name']."</td>";
              echo "<td>".$value['class']."</td>";
              echo "<td>".$value['roll_no']."</td>";
              echo "<td>".$value['gender']."</td>";
              echo "<td>".$value['parents_mo']."</td>";
              echo "<td>".$value['address']."</td>";

              echo "</tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>

  <!-- add new student -->
    <div class="full_block py-4 px-4" id="add_new">
      <main class="mx-2 my-3 shadow rounded">
        <div class="py-3 text-center">
          <h4>Add New Student</h4>
        </div>
        
        <hr class="my-3">
          <form class="needs-validation col-12 px-4" method="POST" novalidate>

            <div class="row g-3">

                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="fathers_name" class="form-label">Fathers name</label>
                
                    <input type="text" class="form-control" id="fathers_name" name="fathers_name" placeholder="" required>
                  <div class="invalid-feedback">
                      Your fathers name is required.
                    </div>
                  
                </div>

                <div class="col-sm-6">
                  <label for="roll_no" class="form-label">Roll number</label>
                  <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="">
                  <div class="invalid-feedback">
                    Please enter a valid roll number.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="parents_mo" class="form-label">Parents mobile</label>
                  <div class="input-group has-validation">
                  <span class="input-group-text">+91</span>
                  <input type="text" class="form-control" id="parents_mo" name="parents_mo" placeholder="3344556677" required>
                  <div class="invalid-feedback">
                    Please enter Parents Mobile.
                  </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <label for="class" class="form-label">Class</label>
                  <select class="form-select" id="class" name="class" required>
                    <option value="">Choose..</option>
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                    <option>4th</option>
                    <option>5th</option>
                    <option>6th</option>
                    <option>7th</option>
                    <option>8th</option>
                    <option>9th</option>
                    <option>10th</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid class.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="form-select" id="gender" name="gender" required>
                    <option value="">Choose..</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                  </select>
                  <div class="invalid-feedback">
                    Please select a valid gender.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter address.
                  </div>
                </div>

              </div>

              <hr class="my-5">
              <button class="w-100 btn btn-primary btn-lg" type="submit" name="add_student">Add Data</button>
          </form>

      </main>
    </div>

  <!-- update student -->
    <div class="full_block py-4 px-4" id="update_user">
      <main class="mx-2 my-3 shadow rounded">
        <div class="py-3 text-center">
          <h4>Update User's Information</h4>
            </div>
          <hr class="my-3">


            <form class="needs-validation px-4" method="POST" novalidate>
              <div class="row g-2">
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Find Student by ID and update" value="" required>
                    <div class="invalid-feedback">
                        Valid user id is required.
                    </div>
                  </div>
                <div class="col-sm-6">
                  <button class="w-50 btn btn-primary btn-sm p-2" type="submit" name="find_student">Find User</button>
              </div>
            </form>
        
            <?php
              if (isset($_POST['find_student'])) {
                $user_id = $_POST['user_id'];
                mysqli_real_escape_string($conn, $user_id);
                $userquery = "SELECT * FROM `students` WHERE `student_id` = '$user_id'";
                $query = mysqli_query($conn , $userquery);
                if($result = mysqli_fetch_array($query)){
            ?>

              <form class="needs-validation col-12" method="POST" novalidate>

                <div class="row g-3">

                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">First name</label>
                      <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="<?php echo $result['first_name']?>" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="<?php echo $result['last_name']?>" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <label for="fathers_name" class="form-label">Fathers name</label>
                    
                        <input type="text" class="form-control" id="fathers_name" name="fathers_name" placeholder="" value="<?php echo $result['fathers_name']?>" required>
                      <div class="invalid-feedback">
                          Your fathers name is required.
                        </div>
                      
                    </div>

                    <div class="col-sm-6">
                      <label for="roll_no" class="form-label">Roll number</label>
                      <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="" value="<?php echo $result['roll_no']?>">
                      <div class="invalid-feedback">
                        Please enter a valid roll number.
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <label for="parents_mo" class="form-label">Parents mobile</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text">+91</span>
                      <input type="text" class="form-control" id="parents_mo" name="parents_mo" placeholder="3344556677" value="<?php echo $result['parents_mo']?>" required>
                      <div class="invalid-feedback">
                        Please enter Parents Mobile.
                      </div>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <label for="class" class="form-label">Class</label>
                      <select class="form-select" id="class" name="class" required>
                        <option value="<?php echo $result['class']?>"><?php echo $result['class']?></option>
                        <option>1st</option>
                        <option>2nd</option>
                        <option>3rd</option>
                        <option>4th</option>
                        <option>5th</option>
                        <option>6th</option>
                        <option>7th</option>
                        <option>8th</option>
                        <option>9th</option>
                        <option>10th</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid class.
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <label for="gender" class="form-label">Gender</label>
                      <select class="form-select" id="gender" name="gender" required>
                        <option value="<?php echo $result['gender']?>"><?php echo $result['gender']?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                      </select>
                      <div class="invalid-feedback">
                        Please select a valid gender.
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?php echo $result['address']?>" required>
                      <div class="invalid-feedback">
                        Please enter address.
                      </div>
                    </div>

                  </div>
                  <input type="text" hidden name="user_id" value="<?php echo $result['student_id'] ?>" required>
                  <hr class="my-3">
                  <button class="w-100 btn btn-primary btn-lg" type="submit" name="update_student">Update Student</button>
              </form>

            <?php }else{echo "<script>alert('Data not found !');</script>";}}?>

      </main>
    </div>

</div>
</main>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/checkout.js"></script>
<script src="./js/sidebars.js"></script>
</body>
</html>

