<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdInvitadoPor'])) {
  $IdInvitadoPor = $_GET['IdInvitadoPor'];
  $query = "DELETE FROM invitadospor WHERE IdInvitadoPor = $IdInvitadoPor";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/guestsFrom.php');
}

?>
