<?php
include('../dbConnect/db.php');
$Evento = '';
$Fecha= '';
$Observaciones= '';

if  (isset($_GET['IdEvento'])) {
  $IdEvento = $_GET['IdEvento'];
  $query = "SELECT * FROM eventos WHERE IdEvento=$IdEvento";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Evento = $row['Evento'];
    $Fecha = $row['Fecha'];
    $Observaciones = $row['Observaciones'];
    
  }
}

if (isset($_POST['update'])) {
  $IdEvento = $_GET['IdEvento'];
  $Evento= $_POST['Evento'];
  $Fecha= $_POST['Fecha'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE eventos set Evento = '$Evento',Fecha = '$Fecha', Observaciones = '$Observaciones' WHERE IdEvento=$IdEvento";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Dato actualizado con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/event.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editEvent.php?IdEvento=<?php echo $_GET['IdEvento']; ?>" method="POST">
      <div>
          <h3>Editar Eventos</h3>
      </div>
        <div class="form-group">
          <input name="Evento" type="text" class="form-control" value="<?php echo $Evento; ?>" placeholder="Evento">
        </div>
        <div class="form-group">
            <input type="date" name="Fecha" class="form-control" value="<?php echo $Fecha; ?>" placeholder="Fecha del Evento">
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
