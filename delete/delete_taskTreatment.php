<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdTratamiento'])) {
  $IdTratamiento = $_GET['IdTratamiento'];
  $query = "DELETE FROM tratamiento WHERE IdTratamiento = $IdTratamiento";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/treatment.php');
}

?>
