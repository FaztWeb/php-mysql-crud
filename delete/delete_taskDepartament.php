<?php

include("../dbConnect/db.php"); 



if(isset($_GET['IdDepartamento'])) {
  $IdDepartamento = $_GET['IdDepartamento'];
  $query = "DELETE FROM departamento WHERE IdDepartamento = $IdDepartamento";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 /*  MENSAJE EMERGENTE CUANDO SE ELIMINA UNA TABLA */

  $_SESSION['message'] = 'Tabla eliminada con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location:../screens/department.php');
}

?>
