<?php
include('../dbConnect/db.php');
$OrigenBD = '';
$Observaciones= '';

if  (isset($_GET['IdOrigenesBD'])) {
  $IdOrigenesBD = $_GET['IdOrigenesBD'];
  $query = "SELECT * FROM origenbd WHERE IdOrigenesBD=$IdOrigenesBD";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $OrigenBD = $row['OrigenBD'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdOrigenesBD = $_GET['IdOrigenesBD'];
  $OrigenBD= $_POST['OrigenBD'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE origenbd set OrigenBD = '$OrigenBD', Observaciones = '$Observaciones' WHERE IdOrigenesBD=$IdOrigenesBD";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/origindb.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editOrigindb.php?IdOrigenesBD=<?php echo $_GET['IdOrigenesBD']; ?>" method="POST">
      <div>
          <h3>Editar origen-bd</h3>
      </div>
        <div class="form-group">
          <input name="OrigenBD" type="text" class="form-control" value="<?php echo $OrigenBD; ?>" placeholder="Update Title">
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
