<?php
include('../dbConnect/db.php');
$Ciudad = '';
$Observaciones= '';

if  (isset($_GET['IdCiudad'])) {
  $IdCiudad = $_GET['IdCiudad'];
  $query = "SELECT * FROM ciudades WHERE IdCiudad=$IdCiudad";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Ciudad = $row['Ciudad'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdCiudad = $_GET['IdCiudad'];
  $Ciudad= $_POST['Ciudad'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE ciudades set Ciudad = '$Ciudad', Observaciones = '$Observaciones' WHERE IdCiudad=$IdCiudad";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/cities.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?IdCiudad=<?php echo $_GET['IdCiudad']; ?>" method="POST">
      <div>
          <h3>Editar Ciudades</h3>
      </div>
        <div class="form-group">
          <input name="Ciudad" type="text" class="form-control" value="<?php echo $Ciudad; ?>" placeholder="Update Title">
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
