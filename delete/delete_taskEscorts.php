<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdAcompanantes'])) {
  $IdAcompanantes = $_GET['IdAcompanantes'];
  $query = "DELETE FROM acompanantes WHERE IdAcompanantes = $IdAcompanantes";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/escorts.php');
}

?>
