<?php

include('../dbConnect/db.php');

if (isset($_POST['save_taskGenders'])) {
  $Genero = $_POST['Genero'];
  $Observaciones = $_POST['Observaciones'];
 


  $query = "INSERT INTO generos(Genero, Observaciones) 
  VALUES ('$Genero', '$Observaciones')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  

  $_SESSION['message'] = 'Registro Guardado con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location:../screens/genders.php');

 

}

?>



