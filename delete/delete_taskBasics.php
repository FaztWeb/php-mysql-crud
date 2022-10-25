<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdBasicos'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $query = "DELETE FROM basicos WHERE IdBasicos = $IdBasicos";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/basics/detail_basics/detail_basics.php');
}

?>
