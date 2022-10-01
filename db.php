<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'db_novio_crud'
) or die(mysqli_erro($mysqli));

?>
