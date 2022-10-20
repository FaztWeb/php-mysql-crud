<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdGenero'])) {
  $IdGenero = $_GET['IdGenero'];
  $query = "DELETE FROM generos WHERE IdGenero = $IdGenero";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/genders.php');
}

?>
