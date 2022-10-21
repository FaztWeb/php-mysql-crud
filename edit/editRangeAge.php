<?php
include('../dbConnect/db.php');
$RangoEdad = '';
$Observaciones= '';

if  (isset($_GET['IdRangoEdad'])) {
  $IdRangoEdad = $_GET['IdRangoEdad'];
  $query = "SELECT * FROM rangoedad WHERE IdRangoEdad=$IdRangoEdad";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $RangoEdad = $row['RangoEdad'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdRangoEdad = $_GET['IdRangoEdad'];
  $RangoEdad= $_POST['RangoEdad'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE rangoedad set RangoEdad = '$RangoEdad', Observaciones = '$Observaciones' WHERE IdRangoEdad=$IdRangoEdad";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/rangeAge.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editRangeAge.php?IdRangoEdad=<?php echo $_GET['IdRangoEdad']; ?>" method="POST">
      <div>
          <h3>Editar rango edad</h3>
      </div>
        <div class="form-group">
          <input name="RangoEdad" type="text" class="form-control" value="<?php echo $RangoEdad; ?>" placeholder="Update Title">
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
