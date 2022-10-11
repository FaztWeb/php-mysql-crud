<?php
include('../dbConnect/db.php');
$Asistencia = '';
$Observaciones= '';

if  (isset($_GET['IdAsistencia'])) {
  $IdAsistencia = $_GET['IdAsistencia'];
  $query = "SELECT * FROM asistencia WHERE IdAsistencia=$IdAsistencia";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Asistencia = $row['Asistencia'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdAsistencia = $_GET['IdAsistencia'];
  $Asistencia= $_POST['Asistencia'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE asistencia set Asistencia = '$Asistencia', Observaciones = '$Observaciones' WHERE IdAsistencia=$IdAsistencia";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/attendance.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editAttendance.php?IdAsistencia=<?php echo $_GET['IdAsistencia']; ?>" method="POST">
      <div>
          <h3>Editar Asistencia</h3>
      </div>
        <div class="form-group">
          <input name="Asistencia" type="text" class="form-control" value="<?php echo $Asistencia; ?>" placeholder="Update Title">
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
