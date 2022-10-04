<?php

include('../dbConnect/db.php');

if (isset($_POST['save_taskBasics'])) {
  $Nombres = $_POST['Nombres'];
  $Apellidos = $_POST['Apellidos'];
  $Empresa = $_POST['Empresa'];
  $Ciudad = $_POST['Ciudad'];
  $TelefonoEmpresa = $_POST['TelefonoEmpresa'];
  $idGenero = $_POST['idGenero'];


  $query = "INSERT INTO basicos(Nombres, Apellidos, Empresa, Ciudad, TelefonoEmpresa, idGenero ) 
  VALUES ('$Nombres', '$Apellidos','$Empresa','$Ciudad','$TelefonoEmpresa','$idGenero')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  

  $_SESSION['message'] = 'Tabla guardada con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location:../screens/basics.php');

 

}

?>



