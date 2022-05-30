<?php

include "conn.php";

$id = $_GET['id'];

$single_student = "select * from student where id=$id";

$qry = mysqli_query($conn, $single_student);

$student = mysqli_fetch_assoc($qry);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit data</title>
  </head>
  <body>
     
    <?php  include("nav.php");   ?>
    <!-- <?php  include "nav.php";   ?> -->
    
    <h1>Update Your Data</h1><br>
    
    <!-- <div class="container py-3">
        <h2>Insert Student Value</h2>
    </div> -->

    <div class="row py-3">
        <div class="col-md-6">
            <div class="container">
                <form action="student_update.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $id;  ?>" name="hidden_id">

                    <div class="form-group my-2">
                        <small>Your Name:</small>
                        <input type="text" name="name" value="<?php echo $student['name'] ?>" placeholder="Enter your name" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Age:</small>
                        <input type="number" name="age" value="<?php echo $student['age'] ?>" placeholder="Enter your age" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Class:</small>
                        <input type="number" name="class" value="<?php echo $student['class'] ?>" placeholder="Enter your class" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Parent Name:</small>
                        <input type="text" name="parents_name" value="<?php echo $student['parents_name'] ?>" placeholder="Enter your parent name" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Image:</small>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <img style="width: 80px; height:70px;" src="<?php echo $student['image'] ; ?>">
                    </div>

                    <button class="btn btn-danger my-2" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>