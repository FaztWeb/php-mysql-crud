<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdEvento'])) {
  $IdEvento = $_GET['IdEvento'];
  $query = "DELETE FROM eventos WHERE IdEvento = $IdEvento";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/event.php');
}

?>
