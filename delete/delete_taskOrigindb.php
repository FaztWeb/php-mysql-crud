<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdOrigenBD'])) {
  $IdOrigenBD = $_GET['IdOrigenBD'];
  $query = "DELETE FROM origenbd WHERE IdOrigenBD = $IdOrigenBD";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/origindb.php');
}

?>
