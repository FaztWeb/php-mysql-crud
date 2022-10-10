<link rel="stylesheet" href="../login/styles.css" >

<?php
$loginUser=$_POST["loginUser"];
$loginPassword=$_POST["loginPassword"];
session_start();
$_SESSION["loginUser"]=$loginUser;

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'sistema'
  ) or die(mysqli_erro($mysqli));

$queryDB="SELECT*FROM usuarios where Usuario='$loginUser' and Clave='$loginPassword'";
$result=mysqli_query($conn,$queryDB);

$rows=mysqli_num_rows($result);

if($rows){
    header('Location:../home/home.php');
}else{
    ?>
    <?php
    include('../login/login.php');
    ?>
    <h1 class="bad"></h1>
        Usuario o contraseña incorrecto
    </h1>
    <?php
}
mysqli_free_result($result);
    mysqli_close($conn);