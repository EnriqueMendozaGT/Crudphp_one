<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $tittle = $_POST['tittle'];
    $description = $_POST['descritpion'];

    $query = "UPDATE tasks set title = '$tittle',description = '$description' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'task updated succesfully';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}

?>

<?php include("includes/header.php") ?>

<div class="container">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="editTask.php?id=<?php echo $_GET['id'];?>" method="POST">
                <div class="form-group">
                    <input type="text" name="tittle" value="<?php echo $title; ?>" class="form-control" placeholder="Update title">
                </div>
                <div class="form-group">
                    <textarea name="descritpion"  rows="2" class="form-control" placeholder="Update description " ><?php echo $description;?></textarea>
                </div>
                <Button class="btn btn-success" name="update">Update</Button>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>