<?php
include('../dbConnect/db.php');
$Acompanantes = '';
$Observaciones= '';

if  (isset($_GET['IdAcompanantes'])) {
  $IdAcompanantes = $_GET['IdAcompanantes'];
  $query = "SELECT * FROM acompanantes WHERE IdAcompanantes=$IdAcompanantes";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Acompanantes = $row['Acompanantes'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdAcompanantes = $_GET['IdAcompanantes'];
  $Acompanantes= $_POST['Acompanantes'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE acompanantes set Acompanantes = '$Acompanantes', Observaciones = '$Observaciones' WHERE IdAcompanantes=$IdAcompanantes";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/escorts.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editEscorts.php?IdAcompanantes=<?php echo $_GET['IdAcompanantes']; ?>" method="POST">
      <div>
          <h3>Editar Acompañantes</h3>
      </div>
        <div class="form-group">
          <input name="Acompanantes" type="text" class="form-control" value="<?php echo $Acompanantes; ?>" placeholder="Acompanantes">
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
