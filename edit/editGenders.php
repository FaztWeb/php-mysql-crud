<?php
include('../dbConnect/db.php');
$Genero = '';
$Observaciones= '';

if  (isset($_GET['IdGenero'])) {
  $IdGenero = $_GET['IdGenero'];
  $query = "SELECT * FROM generos WHERE IdGenero=$IdGenero";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Genero = $row['Genero'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdGenero = $_GET['IdGenero'];
  $Genero= $_POST['Genero'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE generos set Genero = '$Genero', Observaciones = '$Observaciones' WHERE IdGenero=$IdGenero";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/genders.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editGenders.php?IdGenero=<?php echo $_GET['IdGenero']; ?>" method="POST">
      <div>
          <h3>Editar Generos</h3>
      </div>
        <div class="form-group">
          <input name="Genero" type="text" class="form-control" value="<?php echo $Genero; ?>" placeholder="Genero">
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
