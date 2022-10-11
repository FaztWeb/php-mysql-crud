<?php
include('../dbConnect/db.php');
$Tratamiento = '';
$Observaciones= '';

if  (isset($_GET['IdTratamiento'])) {
  $IdTratamiento = $_GET['IdTratamiento'];
  $query = "SELECT * FROM tratamiento WHERE IdTratamiento=$IdTratamiento";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Tratamiento = $row['Tratamiento'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdTratamiento = $_GET['IdTratamiento'];
  $Tratamiento= $_POST['Tratamiento'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE tratamiento set Tratamiento = '$Tratamiento', Observaciones = '$Observaciones' WHERE IdTratamiento=$IdTratamiento";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/treatment.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editTreatment.php?IdTratamiento=<?php echo $_GET['IdTratamiento']; ?>" method="POST">
      <div>
          <h3>Editar Ciudades</h3>
      </div>
        <div class="form-group">
          <input name="Tratamiento" type="text" class="form-control" value="<?php echo $Tratamiento; ?>" placeholder="Update Title">
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
