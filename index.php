<?php

include("db.php")

?>
<?php

include("includes/header.php")

?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
        <form action="saveTask.php" method="post">
            <!-- Tittle -->
          <div class="form-group">
            <input
              type="text"
              name="tittle"
              class="form-control"
              placeholder="Task tittle"
              autofocus
            />
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

    <div class="col-md-8"></div>
  </div>
</div>

<?php include("includes/footer.php") ?>
