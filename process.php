<?php
session_start();
// Create connection
$con = new mysqli("localhost","root","","post");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$total = 0;
$update = false;
$id=0;
$name = '';
$description = '';

    if(isset($_POST['save'])){
       
        $post = $_POST['post'];
        $description = $_POST['description'];

        $query = mysqli_query($con, "INSERT INTO post (name, description) VALUE ('$post', '$description')"); 
        
        $_SESSION['massage'] = "Recode has been saved !";
        $_SESSION['msg_type'] = "primary";

        header("location: post.php?result=true");

    }

    //delete post

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $query = mysqli_query($con, "DELETE FROM post WHERE id=$id");
        $_SESSION['massage'] = "Recode has been Delete !";
        $_SESSION['msg_type'] = "danger";

        header("location: post.php");

    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($con, "SELECT * FROM post WHERE id=$id");

      
        if( mysqli_num_rows($result) == 1){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $description = $row['description'];
        }
    
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $post = $_POST['post'];
        $description = $_POST['description'];

        $query = mysqli_query($con, "UPDATE post SET name='$post', description='$description' WHERE id='$id'");
        $_SESSION['massage'] = "Recode has been Update !";
        $_SESSION['msg_type'] = "success";
        header("location: post.php");
    }


?>

