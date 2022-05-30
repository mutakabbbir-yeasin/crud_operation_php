<?php

include "conn.php";

$id = $_GET['id'];

$select = "select * from student where id='$id'";

$img_qry = mysqli_query($conn, $select);

$img_path = mysqli_fetch_assoc($img_qry);

@unlink($img_path['image']);

$delete = "delete from student where id=$id";

$qry = mysqli_query($conn, $delete);

if($qry){
    header("Location: see_students.php");
}else{
    echo "something went wrong";
}

?>