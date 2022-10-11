<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdCiudad'])) {
  $IdCiudad = $_GET['IdCiudad'];
  $query = "DELETE FROM ciudades WHERE IdCiudad = $IdCiudad";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/cities.php');
}

?>
