<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdUsuarios'])) {
  $IdUsuarios = $_GET['IdUsuarios'];
  $query = "DELETE FROM usuarios WHERE IdUsuarios = $IdUsuarios";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/users.php');
}

?>
