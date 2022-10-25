<?php
include('../dbConnect/db.php');
$InvitadoPor = '';
$Observaciones= '';

if  (isset($_GET['IdInvitadoPor'])) {
  $IdInvitadoPor = $_GET['IdInvitadoPor'];
  $query = "SELECT * FROM invitadospor WHERE IdInvitadoPor=$IdInvitadoPor";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $InvitadoPor = $row['InvitadoPor'];
    $Observaciones = $row['Observaciones'];
  }
}

if (isset($_POST['update'])) {
  $IdInvitadoPor = $_GET['IdInvitadoPor'];
  $InvitadoPor= $_POST['InvitadoPor'];
  $Observaciones = $_POST['Observaciones'];

  $query = "UPDATE invitadospor set InvitadoPor = '$InvitadoPor', Observaciones = '$Observaciones' WHERE IdInvitadoPor=$IdInvitadoPor";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Dato actualizado con exito!';     /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/guestsFrom.php');
}

?>
<?php include('../includes/header.php'); ?>
<meta charset="UTF-8">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editGuestsFrom.php?IdInvitadoPor=<?php echo $_GET['IdInvitadoPor']; ?>" method="POST">
      <div>
          <h3>Editar invitado por</h3>
      </div>
        <div class="form-group">
          <input name="InvitadoPor" type="text" class="form-control" value="<?php echo $InvitadoPor; ?>" placeholder=" Invitado Por">
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
