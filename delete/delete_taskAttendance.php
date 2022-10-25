<?php

include("../dbConnect/db.php"); 

if(isset($_GET['IdAsistencia'])) {
  $IdAsistencia = $_GET['IdAsistencia'];
  $query = "DELETE FROM asistencia WHERE IdAsistencia = $IdAsistencia";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

 $_SESSION['message'] = 'Dato eliminado con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/attendance.php');
}

?>
