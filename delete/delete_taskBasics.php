<?php

include("../dbConnect/db.php"); 

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM taskUsers WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/users.php');
}

?>
