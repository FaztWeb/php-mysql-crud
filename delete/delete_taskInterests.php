<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdInteres'])) {
  $IdInteres = $_GET['IdInteres'];
  $query = "DELETE FROM intereses WHERE IdInteres = $IdInteres";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/interests.php');
}

?>
