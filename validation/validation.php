<link rel="stylesheet" href="../login/style.css" >

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
    <div 
    style="display: flex;justify-content: center;align-items: center;padding-left:16em;" class="form-group">
        <div style="width:20em;height:8em;" class="alert alert-danger form-control" role="alert">
            <h4 class="alert-heading">Atencion!</h4>
            <hr>
            <p class="mb-0">usuario o contraseña incorrecto</p>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </div>
    <?php
}
mysqli_free_result($result);
    mysqli_close($conn);



        