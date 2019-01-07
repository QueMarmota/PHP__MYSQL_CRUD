<?php
include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    // echo $title;
    // echo $description;

    $query = "INSERT INTO task(title,description) values ('$title','$description')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query failed");
    }
    $_SESSION['message'] ='Task saved succesfully';
    $_SESSION['message_type'] = 'success';
    //si todo sale bn lo redireccionamos a index
    header("Location: index.php");
}

?>