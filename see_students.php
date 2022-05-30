<?php include "conn.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Studentd List</title>
  </head>
  <body>
     
   <h2 class="text-center py-4">All studens list</h2>
   <hr>


   <div class="row">
     <div class="col-md-2"></div>
          <div class="col-md-8">
          <div class="containar">
            
            <?php 
              $data = "select * from student";
              $qrr = mysqli_query($conn,$data);
              
              // print_r($arr);
            ?>
              <table class="table table-dark table-striped ">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Class</th>
                    <th scope="col">Parent Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while($arr = mysqli_fetch_assoc($qrr)){
                  ?>

                      <tr>
                        <td><?php  echo $arr['id'];  ?></td>
                        <td><?php  echo $arr['name'];  ?></td>
                        <td><?php  echo $arr['age'];  ?></td>
                        <td><?php  echo $arr['class'];  ?></td>
                        <td><?php  echo $arr['parents_name'];  ?></td>
                        <td><img style="width: 80px; height:70px;" src="<?php echo $arr['image'];  ?>" alt=""></td>
                        <td>
                          <a href="edit.php?id=<?php echo $arr['id']; ?>" class="btn btn-primary">Edit</a>
                          <a href="delete.php?id=<?php echo $arr['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    
                  <?php 
                    }
                  ?>
                  
                  
                </tbody>
              </table>
              <a href="insert.php" class="btn btn-dark">Insert Now</a>
          </div>
      </div>
       <div class="col-md-2"></div>
    </div>




   
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>