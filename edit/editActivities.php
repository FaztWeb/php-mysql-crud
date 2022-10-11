<?php
include('../dbConnect/db.php');
$actividades = '';
$Observaciones= '';

if  (isset($_GET['IdActividad'])) {
  $IdActividad = $_GET['IdActividad'];
  $query = "SELECT * FROM actividades WHERE IdActividad=$IdActividad";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Actividad = $row['Actividad'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdActividad = $_GET['IdActividad'];
  $Actividad= $_POST['Actividad'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE actividades set Actividad = '$Actividad', Observaciones = '$Observaciones' WHERE IdActividad=$IdActividad";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/activities.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editActivities.php?IdActividad=<?php echo $_GET['IdActividad']; ?>" method="POST">
      <div>
          <h3>Editar Actividades</h3>
      </div>
        <div class="form-group">
          <input name="Actividad" type="text" class="form-control" value="<?php echo $Actividad; ?>" placeholder="Update Title">
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
