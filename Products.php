<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: Login.php");
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
                href="display.php">Dashboard</a>
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



  <section class="Product-back">
    <div class="container vh-100 ">
      <div class="row d-flex justify-content-evenly">
        <div class="col-lg-4 mb-4 mt-4">

        <?php
      $productName = "";
      $imageFileName = "";

    if(isset($_POST["submit"])){
    $productName = $_POST["Pname"];

    $target_dir = "uploads/";
    $imageFilename = time(). '.' . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $imageFilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Initialize imageFileType variable

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<div id='error-alert' class='alert alert-danger'>File is not an Image.</div>";
        $uploadOk = 0;  
    }

    // Check file size (1MB limit)
    if ($_FILES["image"]["size"] > 1000000) {
        echo "<div id='error-alert' class='alert alert-danger'>Sorry, your file is too large. It should be within 1MB.</div>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    if(!in_array($imageFileType, $allowed_extensions)) {
        echo "<div id='error-alert' class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<div id='error-alert' class='alert alert-danger'>Sorry, Your file was not uploaded</div>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

            // Inserting data into the database
            require_once "database.php"; // Ensure this file contains correct database connection details
            $sql = "INSERT INTO add_product (Product_name, image) VALUES (?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if($prepareStmt){
                mysqli_stmt_bind_param($stmt, "ss", $productName, $target_file);
                mysqli_stmt_execute($stmt);
                echo "<div id='success-alert' class='alert alert-success'>Registered successfully</div>";
            } else {
                die("Something went wrong");
            }
        } else {
            echo "<div id='error-alert' class='alert alert-danger'>Sorry, there was an error uploading your file.</div>";
        }

        echo "<script>
        setTimeout(function() {
          let errorAlert = document.getElementById('error-alert');
            if(errorAlert) {
            errorAlert.style.display = 'none';
            }

          let successAlert = document.getElementById('success-alert');
            if(successAlert) {
              successAlert.style.display = 'none';
            }
          }, 3000);
        </script>";
    }
}
?>



          <form action="./Products.php" method="post" enctype='multipart/form-data'>
            <div class="mb-3">
              <label for="ProductName" class="form-label text-dark fs-4 fw-semibold Prod-style ">Product-Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Pname" required>
            </div>
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label text-dark fs-4 fw-semibold Prod-style">Product-Image</label>
              <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-success">Set product</button>
            </div>
          </form>
        </div>

        <div class="col-lg-6  mt-4">
          <h4 class="Prod-style">Products-List</h4>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" class="fw-semibold">id</th>
                <th scope="col" class="fw-semibold">Product-Image</th>
                <th scope="col" class="fw-semibold">Name of Product</th>
                <th scope="col" class="fw-semibold">Action</th>
              </tr>
            </thead>
            <tbody>

            <?php
              require_once "database.php";
               if(!$conn){
                 die("Connection is not successful");
               }
              $sql = "SELECT * FROM add_product";
             $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($result)){
              $id = $row["id"];
            
            $ProductName = $row["Product_name"];
             
             $image = $row["image"];

                echo " <tr>
               <th scope='row'> $id </th>
                <td>$ProductName</td>
                <td><img src='$image' width='100' height='100'/></td>
                <td><button class='btn btn-danger' onclick='deleteProduct($id)'>Delete <i class='bi bi-trash'></i></button></td>
               </tr> ";
               
               }

            ?>

            </tbody>
          </table>

          
        </div>

          <script>
             function deleteProduct(id){
              if(confirm("Are yoy sure You want to delete this product")){
                window.location.href="delete_product.php ? id=  " + id;
              }
             }
            </script>


      </div>
    </div>
  </section>

</body>

</html>