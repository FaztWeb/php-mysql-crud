<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdRangoEdad'])) {
  $IdRangoEdad = $_GET['IdRangoEdad'];
  $query = "DELETE FROM rangoedad WHERE IdRangoEdad = $IdRangoEdad";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/rangeAge.php');
}

?>
