<?php
include('../dbConnect/db.php');
$Evento = '';
$Observaciones= '';

if  (isset($_GET['IdEvento'])) {
  $IdEvento = $_GET['IdEvento'];
  $query = "SELECT * FROM eventos WHERE IdEvento=$IdEvento";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Evento = $row['Evento'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdEvento = $_GET['IdEvento'];
  $Ciudad= $_POST['Ciudad'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE eventos set Evento = '$Evento', Observaciones = '$Observaciones' WHERE IdEvento=$IdEvento";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/event.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editEvent.php?IdEvento=<?php echo $_GET['IdEvento']; ?>" method="POST">
      <div>
          <h3>Editar Eventos</h3>
      </div>
        <div class="form-group">
          <input name="Evento" type="text" class="form-control" value="<?php echo $Evento; ?>" placeholder="Update Title">
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
