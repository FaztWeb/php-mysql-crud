<?php

//INCLUIR LA BASE DE DATOS EN ESTA VISTA 
include('../dbConnect/db.php');
//
// CONDICIONAL, SI save_task existe, guardame estos valores en las variables   $title  $description con el metodo de peticion post,
//$title = $_POST['escribe el name que aparece en el input en este caso seria =  title'];
//
if (isset($_POST['save_task'])) {
  $Evento = $_POST['Evento'];

  $Observaciones = $_POST['Observaciones'];
  //
  //INSERTA LOS DATOS CON INSERT INTO, ESCRIBE EL NOMBRE DE LA TABLA EN ESTE CASO SERIA TASK DESCRIBE QUE VALORES VAS GUADAR EN TASK
  //( EN ESTE CASO SERIA  title, description) LOS CUALES ESTAN ALMACENADOS EN LAS VARIABLES VALUES('$title', '$description')";
  //
  $query = "INSERT INTO eventos(Evento, Observaciones) VALUES ('$Evento', '$Observaciones')";
  //
  // ENVIAR LOS DATOS A LA BASE DE DATOS ../dbConnect/db.php VARIAVLE $conn EN CASO DE ERROR MUESTRA EL ERROR
  //
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  //
  // REDIRECCION A LA VISTA DESPUES DE ENVIAR LOS DATOS Location:../index.php
  // MENSAJES DE SESSION DESPUES DE ENVIAR LOS DATOS A LA BASE DE DATOS 
  //
  $_SESSION['message'] = 'Registro Guardado con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location:../screens/event.php');


}

?>
