<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdGeneros'])) {
  $IdGeneros = $_GET['IdGeneros'];
  $query = "DELETE FROM generos WHERE IdGeneros = $IdGeneros";
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
