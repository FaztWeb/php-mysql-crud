<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sistema'
) or die(mysqli_erro($mysqli));

?>
