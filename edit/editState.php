<?php
include('../dbConnect/db.php');
$Estado = '';
$Observaciones= '';

if  (isset($_GET['IdEstado'])) {
  $IdEstado = $_GET['IdEstado'];
  $query = "SELECT * FROM estado WHERE IdEstado=$IdEstado";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Estado = $row['Estado'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdEstado = $_GET['IdEstado'];
  $Estado= $_POST['Estado'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE estado set Estado = '$Estado', Observaciones = '$Observaciones' WHERE IdEstado=$IdEstado";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/state.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editState.php?IdEstado=<?php echo $_GET['IdEstado']; ?>" method="POST">
      <div>
          <h3>Editar Ciudades</h3>
      </div>
        <div class="form-group">
          <input name="Estado" type="text" class="form-control" value="<?php echo $Estado; ?>" placeholder="Estado">
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
