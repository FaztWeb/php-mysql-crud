<?php

include('../dbConnect/db.php');

if (isset($_POST['save_taskUsers'])) {
  $titleUsers = $_POST['titleUsers'];
  $descriptionUsers = $_POST['descriptionUsers'];
  $cityUsers = $_POST['cityUsers'];


  $query = "INSERT INTO taskUsers(titleUsers, descriptionUsers, cityUsers) VALUES ('$titleUsers', '$descriptionUsers','$cityUsers')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tabla guardada con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location:../screens/users.php');

 

}

?>
