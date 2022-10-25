<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdEstado'])) {
  $IdEstado = $_GET['IdEstado'];
  $query = "DELETE FROM estado WHERE IdEstado = $IdEstado";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/state.php');
}

?>
