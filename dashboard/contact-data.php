<?php 
include 'components/header.php';
include 'connection.php' ?>


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
          <div class="collapse  " id="students-collapse">
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
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#contact-data-collapse" aria-expanded="true">
          Contact Data
        </button>
        <div class="collapse show" id="contact-data-collapse">
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
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
              <li><a href="logout.php" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
    </ul>

  </slider>
<div class="b-example-divider b-example-vr"></div>

<!-- main body code start-->

<div class="main_container py-4 px-4 w-100">

  <!-- list of teachers  -->
  <div class="full_block py-4 " id="form-data">
    <table class="table table-hover shadow ">
      <thead>
        <tr class="table-dark">
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>
          
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        if($result){
          foreach($result as $value){
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['name']."</td>";
            echo "<td>".$value['email']."</td>";
            echo "<td>".$value['message']."</td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>

  

</div>
</main>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/checkout.js"></script>
<script src="./js/sidebars.js"></script>
</body>
</html>

