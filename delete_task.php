<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query ="DELETE FROM task WHERE id = $id";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die("QUERY FAILED");
        }
        $_SESSION['message'] = 'Task Removed Succesfully';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>