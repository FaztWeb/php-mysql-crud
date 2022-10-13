<?php

include('../dbConnect/db.php');

if (isset($_POST['save_taskBasics'])) {
  $TratamientoPersonal= $_POST['TratamientoPersonal'];
  $Nombres = $_POST['Nombres'];
  $Apellidos= $_POST['Apellidos'];
  $OtroAcompanante = $_POST['OtroAcompanante'];
  $Cargo= $_POST['Cargo'];
  $Empresa= $_POST['Empresa'];
  $TelefonoEmpresa = $_POST['TelefonoEmpresa'];
  $TelefonoEmpresaDirecto= $_POST['TelefonoEmpresaDirecto'];
  $CelularEmpresa = $_POST['CelularEmpresa'];
  $CorreoEmpresarial= $_POST['CorreoEmpresarial'];
  $AsistenteSecretaria = $_POST['AsistenteSecretaria'];
  $CorreoAsistenteSecretaria = $_POST['CorreoAsistenteSecretaria'];
  $DireccionEmpresa= $_POST['DireccionEmpresa'];
  $DireccionResidencia = $_POST['DireccionResidencia'];
  $TelefonoResidencia = $_POST['TelefonoResidencia'];
  $CelularPersonal= $_POST['CelularPersonal'];
  $CorreoPersonal = $_POST['CorreoPersonal'];
  $Cedula= $_POST['Cedula'];
  $idGenero = $_POST['idGenero'];
  $idRangosEdad= $_POST['idRangosEdad'];


  $query = "INSERT INTO basicos(
    Nombres, Apellidos,OtroAcompanante,Cargo, Empresa, Ciudad, TelefonoEmpresa,
    TelefonoEmpresaDirecto,CelularEmpresa,CorreoEmpresarial,AsistenteSecretaria,
    CorreoAsistenteSecretaria,DireccionEmpresa,DireccionResidencia,TelefonoResidencia,
    CelularPersonal,CorreoPersonal,Cedula,idGenero,idRangosEdad ) 
  VALUES (
    '$Nombres', '$Apellidos','$OtroAcompanante','$Cargo','$TelefonoEmpresa',
    '$TelefonoEmpresaDirecto','$CelularEmpresa','$CorreoEmpresarial','$AsistenteSecretaria',
    '$CorreoAsistenteSecretaria','$DireccionEmpresa','$DireccionResidencia','$TelefonoResidencia',
    '$CelularPersonal','$CorreoPersonal','$Cedula','$idGenero','$idRangosEdad')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  

  $_SESSION['message'] = 'Registro Guardado con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location:../screens/basics/detail_basics/detail_basics.php');



}

?>



