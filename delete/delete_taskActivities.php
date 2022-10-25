<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdActividad'])) {
  $IdActividad = $_GET['IdActividad'];
  $query = "DELETE FROM actividades WHERE IdActividad = $IdActividad";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/activities.php');
}

?>
