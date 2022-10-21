<?php
include('../dbConnect/db.php');
$Departamento = '';


if  (isset($_GET['IdDepartamento'])) {
  $IdDepartamento = $_GET['IdDepartamento'];
  $query = "SELECT * FROM departamento WHERE IdDepartamento=$IdDepartamento";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Departamento = $row['Departamento'];
  
  }
}

if (isset($_POST['update'])) {
  $IdDepartamento = $_GET['IdDepartamento'];
  $Departamento= $_POST['Departamento'];


  $query = "UPDATE departamento set Departamento = '$Departamento' WHERE IdDepartamento=$IdDepartamento";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/department.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editDepartament.php?IdDepartamento=<?php echo $_GET['IdDepartamento']; ?>" method="POST">
      <div>
          <h3>Editar Departamento</h3>
      </div>
        <div class="form-group">
          <input name="Departamento" type="text" class="form-control" value="<?php echo $Departamento; ?>" placeholder="Update Title">
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
