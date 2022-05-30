<?php

include "conn.php";

// $id = $_GET['id'];

if(isset($_POST['update'])){
    $st_name = $_POST['name'];
    $st_age = $_POST['age'];
    $st_class = $_POST['class'];
    $p_name = $_POST['parents_name'];
    
    $img = $_FILES['image'];

    $image_name = $img['name'];
    $image_temp = $img['tmp_name'];
    $image_error = $img['error'];

    if($image_error == 0){
        $destination = "upload/".$image_name;
        move_uploaded_file($image_temp, $destination);
    }

    $id = $_POST['hidden_id'];

    $update = "update student set name='$st_name', age='$st_age', class='$st_class', parents_name='$p_name', image='$destination' where id='$id'" ;

    $qry = mysqli_query($conn, $update);

    // $qry = mysqli_query($conn,$update);

    header('location: see_students.php');
     
}

?>