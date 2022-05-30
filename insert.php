<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert Data</title>
  </head>
  <body>
     
    <?php  include("nav.php");   ?>
    <!-- <?php  include "nav.php";   ?> -->
    
    <h1>Insert Your Data</h1><br>
    
    <!-- <div class="container py-3">
        <h2>Insert Student Value</h2>
    </div> -->

    <div class="row py-3">
        <div class="col-md-6">
            <div class="container">
        <a href="see_students.php" class="btn btn-primary">View List</a>
                <form action="student_insert.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group my-2">
                        <small>Your Name:</small>
                        <input type="text" name="name" placeholder="Enter your name" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Age:</small>
                        <input type="number" name="age" placeholder="Enter your age" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Class:</small>
                        <input type="number" name="class" placeholder="Enter your class" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Parent Name:</small>
                        <input type="text" name="parents_name" placeholder="Enter your parent name" class="form-control">
                    </div>

                    <div class="form-group my-2">
                        <small>Your Image:</small>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button class="btn btn-danger my-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>