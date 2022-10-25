<?php
include('../dbConnect/db.php');
$Interes = '';
$Observaciones= '';

if  (isset($_GET['IdInteres'])) {
  $IdInteres = $_GET['IdInteres'];
  $query = "SELECT * FROM intereses WHERE IdInteres=$IdInteres";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Interes = $row['Interes'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdInteres = $_GET['IdInteres'];
  $Interes= $_POST['Interes'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE intereses set Interes = '$Interes', Observaciones = '$Observaciones' WHERE IdInteres=$IdInteres";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Dato actualizado con exito!';    /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/interests.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editInterests.php?IdInteres=<?php echo $_GET['IdInteres']; ?>" method="POST">
      <div>
          <h3>Editar Intereses</h3>
      </div>
        <div class="form-group">
          <input name="Interes" type="text" class="form-control" value="<?php echo $Interes; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="Observaciones" class="form-control" cols="30" rows="10"><?php echo $Observaciones;?></textarea>
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
