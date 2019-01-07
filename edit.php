<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $title =$row['title'];
            $description = $row['description'];
         
        }
    }
    if(isset($_POST['update'])){
        //el id lo obtenemos del metodo get el cual es el se ejecuta desde el index y lo mandamos por url a edit.pho
        $id = $_GET['id'];
        //el metodo post es el que se obtiene del formulario de abajo
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "UPDATE task SET title = '$title' , description = '$description' WHERE id = $id";
        mysqli_query($conn,$query);
        
        $_SESSION['message']='Task updated succesfully';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");

    }
?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Update title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id=""  rows="2" class="form-control" placeholder="Update description"><?php echo $description; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>