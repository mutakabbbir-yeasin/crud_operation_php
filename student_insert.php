<?php

include "conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    $parents_name = $_POST['parents_name'];
    
    $img = $_FILES['image'];

    $image_name = $img['name'];
    $image_temp = $img['tmp_name'];
    $image_error = $img['error'];

    if($image_error == 0){
        $destination = "upload/".$image_name;
        move_uploaded_file($image_temp, $destination);
    }

    $insert = "insert into student(name, age, class, parents_name, image) VALUES('$name', '$age', '$class', '$parents_name', '$destination')";

    $qry = mysqli_query($conn, $insert);

    if($qry){
        header("Location: insert.php");
        // echo "Inserted successfully";
    }else{
        echo "Something went wrong";
    }
}

?>