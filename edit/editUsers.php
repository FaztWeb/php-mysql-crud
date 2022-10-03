<?php
include('../dbConnect/db.php');
$titleUsers = '';
$descriptionUsers= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM taskUsers WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titleUsers = $row['titleUsers'];
    $descriptionUsers = $row['descriptionUsers'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titleUsers= $_POST['titleUsers'];
  $descriptionUsers = $_POST['descriptionUsers'];

  $query = "UPDATE taskUsers set titleUsers = '$titleUsers', descriptionUsers = '$descriptionUsers' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/users.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editUsers.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div>
          <h3>Editar Usuarios</h3>
      </div>
        <div class="form-group">
          <input name="titleUsers" type="text" class="form-control" value="<?php echo $titleUsers; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="descriptionUsers" class="form-control" cols="30" rows="10"><?php echo $descriptionUsers;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../includes/footer.php'); ?>
