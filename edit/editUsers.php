<?php
include('../dbConnect/db.php');
$Usuario = '';
$clave= '';
$Nombre= '';
$Nivel= '';

if  (isset($_GET['IdUsuarios'])) {
  $IdUsuarios = $_GET['IdUsuarios'];
  $query = "SELECT * FROM usuarios WHERE IdUsuarios=$IdUsuarios";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Usuario = $row['Usuario'];
    $clave = $row['clave'];
    $Nombre = $row['Nombre'];
    $Nivel = $row['Nivel'];
  }
}

if (isset($_POST['update'])) {
  $IdUsuarios = $_GET['IdUsuarios'];
  $Usuario= $_POST['Usuario'];
  $clave = $_POST['clave'];
  $Nombre = $_POST['Nombre'];
  $Nivel = $_POST['Nivel'];

  $query = "UPDATE usuarios set Usuario = '$Usuario', clave = '$clave',Nombre = '$Nombre',Nivel = '$Nivel'WHERE IdUsuarios=$IdUsuarios";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Dato actualizado con exito!';    /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/users.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editUsers.php?IdUsuarios=<?php echo $_GET['IdUsuarios']; ?>" method="POST">
      <div>
          <h3>Editar Ciudades</h3>
      </div>
      <div class="form-group">
          <input name="Usuario" type="text" class="form-control" value="<?php echo $Usuario; ?>" placeholder="Usuario">
        </div>
        <div class="form-group">
          <input name="clave" type="text" class="form-control" value="<?php echo $clave; ?>" placeholder="clave">
        </div>
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="Nivel" type="text" class="form-control" value="<?php echo $Nivel; ?>" placeholder="Update Title">
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
