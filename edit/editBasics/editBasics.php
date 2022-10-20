<?php
include('../.././dbConnect/db.php');
$Tratamiento = '';
$Acompanantes = '';
$TratamientoPersonal = '';

$Nombres = '';
$Apellidos= '';
$OtroAcompanante= '';
$Cargo= '';
$Empresa= '';
$TelefonoEmpresa= '';
$TelefonoEmpresaDirecto= '';
$CelularEmpresa= '';
$CorreoEmpresarial= '';
$AsistenteSecretaria= '';
$CorreoAsistenteSecretaria='';
$DireccionEmpresa= '';
$DireccionResidencia= '';
$TelefonoResidencia='';
$CelularPersonal= '';
$CorreoPersonal= '';
$Cedula= '';

if  (isset($_GET['IdBasicos'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Tratamiento = $row['Tratamiento'];
    $Acompanantes = $row['Acompanantes'];
    $TratamientoPersonal = $row['TratamientoPersonal'];

    $Nombres = $row['Nombres'];
    $Apellidos= $row['Apellidos'];
    $OtroAcompanante = $row['OtroAcompanante'];
    $Cargo= $row['Cargo'];
    $Empresa= $row['Empresa'];
    $TelefonoEmpresa = $row['TelefonoEmpresa'];
    $TelefonoEmpresaDirecto= $row['TelefonoEmpresaDirecto'];
    $CelularEmpresa = $row['CelularEmpresa'];
    $CorreoEmpresarial= $row['CorreoEmpresarial'];
    $AsistenteSecretaria = $row['AsistenteSecretaria'];
    $CorreoAsistenteSecretaria = $row['CorreoAsistenteSecretaria'];
    $DireccionEmpresa= $row['DireccionEmpresa'];
    $DireccionResidencia = $row['DireccionResidencia'];
    $TelefonoResidencia = $row['TelefonoResidencia'];
    $CelularPersonal= $row['CelularPersonal'];
    $CorreoPersonal = $row['CorreoPersonal'];
    $Cedula= $row['Cedula'];
  }
}

if (isset($_POST['update'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $Tratamiento = $_POST['Tratamiento'];
  $Acompanantes = $_POST['Acompanantes'];
  $TratamientoPersonal = $_POST['TratamientoPersonal'];

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
  
  $query = "UPDATE basicos set 
 Tratamiento = '$Tratamiento',
 Acompanantes = '$Acompanantes',
 TratamientoPersonal = '$TratamientoPersonal',

   Nombres = '$Nombres',
  Apellidos = '$Apellidos', OtroAcompanante = '$OtroAcompanante',
  Cargo = '$Cargo',Empresa = '$Empresa', TelefonoEmpresa = '$TelefonoEmpresa',
  TelefonoEmpresaDirecto = '$TelefonoEmpresaDirecto', CelularEmpresa = '$CelularEmpresa',
  CorreoEmpresarial = '$CorreoEmpresarial', AsistenteSecretaria = '$AsistenteSecretaria',
  CorreoAsistenteSecretaria = '$CorreoAsistenteSecretaria',
  DireccionEmpresa = '$DireccionEmpresa', DireccionResidencia = '$DireccionResidencia',
  TelefonoResidencia = '$TelefonoResidencia',
  CelularPersonal = '$CelularPersonal', CorreoPersonal = '$CorreoPersonal',
  Cedula = '$Cedula'
   WHERE IdBasicos=$IdBasicos";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../../screens/basics/detail_basics/detail_basics.php');
}

?>
<?php include('../../includes/header_basics.php'); ?>
        <!--  ESTILOS CSS -->
    <link rel="stylesheet" href="./Assets/style.css" >
        <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
      
     <br>
        <div class="title">
            <h1>Editar Basicos</h1>
        </div>
    
<div class="card-body conainer">
    <form action="editBasics.php?IdBasicos=<?php echo $_GET['IdBasicos']; ?>" method="POST">
        <div class="container-space">
        <div class="form-group item gridSelect select ">
                                <div class="selectItems">
                                        <label  class="control-label">Tratamiento Personal</label>
                                    <select class="form-control " name="Tratamiento">
                                            <?php
                                                $query = "SELECT * FROM tratamiento";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $idTratamiento=$row['IdTratamiento'];
                                                    $Tratamiento=$row['Tratamiento'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $idTratamiento ?>" > <?php echo $row['Tratamiento']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                

                                
                                <div class="selectItems">
                                        <label  class="control-label">Acompañantes</label>
                                    <select class="form-control " name="Acompanantes">
                                            <?php
                                                $query = "SELECT * FROM acompanantes";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdAcompanantes=$row['IdAcompanantes'];
                                                    $Acompanantes=$row['Acompanantes'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdAcompanantes ?>" > <?php echo $row['Acompanantes']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Tratamiento Personal</label>
                                    <input type="text" class="form-control"  name="TratamientoPersonal"value="<?php echo $TratamientoPersonal; ?>" placeholder="Tratamiento Personal">
                                </div>



                <div class="form-group item">
                    <label  class="control-label">Nombres</label>
                    <input name="Nombres" type="text" class="form-control" value="<?php echo $Nombres; ?>" placeholder="Nombres">
                </div>
                <div class="form-group item">
                    <label  class="control-label">Apellidos</label>
                    <input name="Apellidos" type="text" class="form-control" value="<?php echo $Apellidos; ?>" placeholder="Apellidos">
                </div>
                <div class="form-group item">
                    <label  class="control-label">OtroAcompanante</label>
                    <input name="OtroAcompanante" type="text" class="form-control" value="<?php echo $OtroAcompanante; ?>" placeholder="OtroAcompanante">
                </div>
                <div class="form-group item">
                    <label  class="control-label">Cargo</label>
                    <input name="Cargo" type="text" class="form-control" value="<?php echo $Cargo; ?>" placeholder="Cargo">
                </div>
                <div class="form-group item">
                    <label  class="control-label">Empresa</label>
                    <input name="Empresa" type="text" class="form-control" value="<?php echo $Empresa; ?>" placeholder="Empresa">
                </div>
                <div class="form-group item">
                    <label  class="control-label">TelefonoEmpresa</label>
                    <input name="TelefonoEmpresa" type="text" class="form-control" value="<?php echo $TelefonoEmpresa; ?>" placeholder="TelefonoEmpresa">
                </div>
                <div class="form-group item">
                    <label  class="control-label">TelefonoEmpresaDirecto</label>
                    <input name="TelefonoEmpresaDirecto" type="text" class="form-control" value="<?php echo $TelefonoEmpresaDirecto; ?>" placeholder="TelefonoEmpresaDirecto">
                </div>
                <div class="form-group item">
                    <label  class="control-label">CelularEmpresa</label>
                    <input name="CelularEmpresa" type="text" class="form-control" value="<?php echo $CelularEmpresa; ?>" placeholder="CelularEmpresa">
                </div>
                <div class="form-group item">
                    <label  class="control-label">CorreoEmpresarial</label>
                    <input name="CorreoEmpresarial" type="text" class="form-control" value="<?php echo $CorreoEmpresarial; ?>" placeholder="CorreoEmpresarial">
                </div>

        </div>
        <div class="container-space">

                <div class="form-group item">
                    <label  class="control-label">AsistenteSecretaria</label>
                    <input name="AsistenteSecretaria" type="text" class="form-control" value="<?php echo $AsistenteSecretaria; ?>" placeholder="AsistenteSecretaria">
                </div>
                <div class="form-group item">
                    <label  class="control-label">CorreoAsistenteSecretaria</label>
                    <input name="CorreoAsistenteSecretaria" type="text" class="form-control" value="<?php echo $CorreoAsistenteSecretaria; ?>" placeholder="CorreoAsistenteSecretaria">
                </div>
                <div class="form-group item">
                    <label  class="control-label">DireccionEmpresa</label>
                    <input name="DireccionEmpresa" type="text" class="form-control" value="<?php echo $DireccionEmpresa; ?>" placeholder="DireccionEmpresa">
                </div>
                <div class="form-group item">
                    <label  class="control-label">DireccionResidencia</label>
                    <input name="DireccionResidencia" type="text" class="form-control" value="<?php echo $DireccionResidencia; ?>" placeholder="DireccionResidencia">
                </div>
                <div class="form-group item">
                    <label  class="control-label">TelefonoResidencia</label>
                    <input name="TelefonoResidencia" type="text" class="form-control" value="<?php echo $TelefonoResidencia; ?>" placeholder="TelefonoResidencia">
                </div>
                <div class="form-group item">
                    <label  class="control-label">CelularPersonal</label>
                    <input name="CelularPersonal" type="text" class="form-control" value="<?php echo $CelularPersonal; ?>" placeholder="CelularPersonal">
                </div>
                <div class="form-group item">
                    <label  class="control-label">CorreoPersonal</label>
                    <input name="CorreoPersonal" type="text" class="form-control" value="<?php echo $CorreoPersonal; ?>" placeholder="CorreoPersonal">
                </div>
                <div class="form-group item">
                    <label  class="control-label">Cedula</label>
                    <input name="Cedula" type="text" class="form-control" value="<?php echo $Cedula; ?>" placeholder="Cedula">
                </div>

                <div class="form-group itemTwo"> <!-- City-->
                    <button 
                    class="btn btn-outline-success" 
                    name="update"
                    style="border-radius:8px;">
                        Actualizar
                    </button>
                    <br>
                            <p>
                                Click para Ver Detalle 
                                <a 
                                href="../../screens/basics/detail_basics/detail_basics.php">
                                    <strong>
                                        Basicos
                                    </strong>
                                </a>
                            </p>
                </div>                   

        </div>
    </form>
</div>
      
    
 

<?php include('../../includes/footer.php'); ?>













      
  
