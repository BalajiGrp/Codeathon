<?php
session_start();
if(!isset($_SESSION["admin_username"])){
  header("Location: Admin_Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
    <!--Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--google fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">
   <!--font Awesome fonts-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
    <section class="mb-1 sticky-top">
        <nav class="navbar navbar-expand-lg  navCol">
          <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
              <img src="./e5934n3j.png" class="img-fluid ms-5" width="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 ms-3 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="Products.php">Add-Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page"
                    href="#">Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active ms-3 fs-5 fw-normal hover-underline-animation" aria-current="page" href="#">Live
                    Tracking</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    
      </section>

      <!--Table Section-->
      <section class="DisPage py-5">
        <div class="container vh-100 DisContain">
            <div class="row">
                <div class="col-md-12">
                 <div class="row d-flex justify-content-between">
                    <div class="col-md-4 mb-3">
                     <h3 class="text-light shadow-lg p-1 mb-1 bg-success rounded">Customer Enquiry Dashboard</h3>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end h-50 mt-1">
                     <a href="logout.php" class="btn btn-danger fw-bold">Logout</a>
                    </div>
                 </div>
                    <table class="table table-success table-striped table-hover">
                        <thead>
                          <tr>
                            <th class="table-head" scope="col ">Id</th>
                            <th class="table-head" scope="col ">Name</th>
                            <th class="table-head" scope="col ">Email</th>
                            <th class="table-head" scope="col ">Product</th>
                            <th class="table-head" scope="col ">Message</th>
                          </tr>
                        </thead>
                        <tbody>

                            <?php
                            require_once "database.php";
                            if(!$conn){
                              die("Connection is not successful");
                            }
                            $sql = "SELECT * FROM enquiry";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                                $id = $row["id"];
                                $CustomName = $row["Username"];
                                $email = $row["email"];
                                $product = $row["dropdown"];
                                $message = $row["message"];

                              echo " <tr>
                                   <th scope='row'> $id </th>
                                   <td>$CustomName</td>
                                   <td>$email</td>
                                   <td>$product</td>
                                   <td>$message</td>
                                   </tr> ";
                            }

                            ?>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
      </section>
       <!--Table Section ends-->
</body>
</html>