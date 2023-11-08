<?php

include("db.php")

?>
<?php

include("includes/header.php")

?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <!-- Alert -->
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <!-- Llamar la verieble de Session -->
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        // Cerrar session
        session_unset();
      } ?>

      <!-- Formulario -->
      <div class="card card-body">
        <form action="saveTask.php" method="post">
          <!-- Tittle -->
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task tittle" autofocus />
          </div>
          <!-- Description -->
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
          </div>

          <!-- Button Submit -->
          <input type="submit" class="btn btn-success btn-block" name="save_task" value="save Task">
        </form>
      </div>
    </div>

    <div class="col-md-8">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM tasks";
          $resultTasks = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_array($resultTasks)) { ?>

            <tr>
              <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['description'] ?></td>
              <td><?php echo $row['created_at'] ?></td>
              <td>
                <a href=editTask.php?id=<?php echo $row['id'] ?> class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                <a href=deleteTask.php?id=<?php echo $row['id'] ?> class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

              </td>
            </tr>


          <?php
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>