<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdOrigenesBD'])) {
  $IdOrigenesBD = $_GET['IdOrigenesBD'];
  $query = "DELETE FROM origenbd WHERE IdOrigenesBD = $IdOrigenesBD";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/origindb.php');
}

?>
