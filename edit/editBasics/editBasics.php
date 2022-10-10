<?php
include('../.././dbConnect/db.php');
$TratamientoPersonal = '';
$Nombres= '';
$Apellidos= '';
$OtroAcompanante= '';
$Cargo= '';
$TelefonoEmpresa= '';
$TelefonoEmpresaDirecto= '';
$CelularEmpresa= '';
$CorreoEmpresarial= '';
$AsistenteSecretaria= '';
$DireccionEmpresa= '';
$DireccionResidencia= '';
$CelularPersonal= '';
$CorreoPersonal= '';
$Cedula= '';
$idGenero= '';
$idRangosEdad= '';


if  (isset($_GET['IdBasicos'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $TratamientoPersonal = $row['TratamientoPersonal'];
    $Nombres = $row['Nombres'];
    $Apellidos = $row['Apellidos'];
    $OtroAcompanante = $row['OtroAcompanante'];
    $Cargo = $row['Cargo'];
    $Empresa = $row['Empresa'];
    $TelefonoEmpresa = $row['TelefonoEmpresa'];
    $TelefonoEmpresaDirecto = $row['TelefonoEmpresaDirecto'];
    $CelularEmpresa = $row['CelularEmpresa'];
    $CorreoEmpresarial = $row['CorreoEmpresarial'];
    $AsistenteSecretaria = $row['AsistenteSecretaria'];
    $CorreoAsistenteSecretaria = $row['CorreoAsistenteSecretaria'];
    $DireccionEmpresa = $row['DireccionEmpresa'];
    $DireccionResidencia = $row['DireccionResidencia'];
    $TelefonoResidencia = $row['TelefonoResidencia'];
    $CelularPersonal = $row['CelularPersonal'];
    $CorreoPersonal = $row['CorreoPersonal'];
    $Cedula = $row['Cedula'];
    $idGenero = $row['idGenero'];
    $idRangosEdad = $row['idRangosEdad'];
  }
}

if (isset($_POST['update'])) {
  $IdBasicos = $_GET['IdBasicos'];
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
  
  $query = "UPDATE basicos set 
  TratamientoPersonal = '$TratamientoPersonal', Nombres = '$Nombres',
  Apellidos = '$Apellidos', OtroAcompanante = '$OtroAcompanante',
  Cargo = '$Cargo',Empresa = '$Empresa', TelefonoEmpresa = '$TelefonoEmpresa',
  TelefonoEmpresaDirecto = '$TelefonoEmpresaDirecto', CelularEmpresa = '$CelularEmpresa',
  CorreoEmpresarial = '$CorreoEmpresarial', AsistenteSecretaria = '$AsistenteSecretaria',
  CorreoAsistenteSecretaria = '$CorreoAsistenteSecretaria',
  DireccionEmpresa = '$DireccionEmpresa', DireccionResidencia = '$DireccionResidencia',
  TelefonoResidencia = '$TelefonoResidencia',
  CelularPersonal = '$CelularPersonal', CorreoPersonal = '$CorreoPersonal',
  Cedula = '$Cedula', idGenero = '$idGenero',
  idRangosEdad = '$idRangosEdad'
   WHERE IdBasicos=$IdBasicos";



  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/basics/detail_basics/detail_basics.php');
}

?>
<?php include('../../includes/header.php'); ?>
<!--  ESTILOS CSS -->
<link rel="stylesheet" href="./Assets/styles.css" >
      <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
      
     <br>
        <div class="title">
            <h1>Editar Basicos</h1>
        </div>
    
    <div class="card-body conainer">

    <form action="editUsers.php?IdBasicos=<?php echo $_GET['IdBasicos']; ?>" method="POST">
        <div class="container-space">
                
                <div class="form-group item  select ">
                <div class="selectItems">
                        <label for="state_id" class="control-label">Tratamiento Personal</label>
                        <select class="form-control " id="state_id">
                            <option value="AL">señor</option>
                            <option value="AK">señora</option>
                            
                        </select> 
                    </div> 
                </div>
                <div class="form-group item">
                    <label for="street1_id" class="control-label">Nombre</label>
                    <input name="Nombres" type="text" class="form-control" value="<?php echo $Nombres; ?>" placeholder="Update Title">
                </div>
                <div class="form-group item">
                    <label for="street2_id" class="control-label">Apellidos</label>
                    <input name="Apellidos" type="text" class="form-control" value="<?php echo $Apellidos; ?>" placeholder="Update Title">
                </div>
                <div class="form-group item  select ">
                <div class="selectItems">
                        <label for="state_id" class="control-label">Acompañante</label>
                        <select class="form-control " id="state_id">
                            <option value="AL">e hija</option>
                            <option value="AK">y señora</option>
                            
                        </select> 
                    </div> 
                </div>                    
                <div class="form-group select item gridSelect"> <!-- State Button -->
                    
                    <div class="selectItems">
                        <label for="state_id" class="control-label">Ciudad</label>
                        <select class="form-control " id="state_id">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                        </select> 
                    </div> 
                    <div class="selectItems">
                        <label for="state_id" class="control-label">Genero</label>
                        <select class="form-control" id="state_id">
                            <option value="AL">Masculino</option>
                            <option value="AK">Femenino</option>
                        </select> 
                    </div>
                   
                </div>

                

                <div class="form-group item"> <!-- City-->
                    <label for="city_id" class="control-label">Cargo</label>
                    <input name="Cargo" type="text" class="form-control" value="<?php echo $Cargo; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group item"> <!-- City-->
                    <label for="city_id" class="control-label">Empresa</label>
                    <input name="Empresa" type="text" class="form-control" value="<?php echo $Empresa; ?>" placeholder="Update Title">
                </div>
                <div class="form-group item"> <!-- City-->
                    <label for="city_id" class="control-label">Telefono Empresa</label>
                    <input name="TelefonoEmpresa" type="text" class="form-control" value="<?php echo $TelefonoEmpresa; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">TelefonoEmpresaDirecto</label>
                    <input name="TelefonoEmpresaDirecto" type="text" class="form-control" value="<?php echo $TelefonoEmpresaDirecto; ?>" placeholder="Update Title">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">CelularEmpresa</label>
                    <input name="CelularEmpresa" type="text" class="form-control" value="<?php echo $CelularEmpresa; ?>" placeholder="Update Title">
                </div>      

                

        </div>
        <div class="container-space">
                
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Correo Empresarial</label>
                    <input name="CorreoEmpresarial" type="text" class="form-control" value="<?php echo $CorreoEmpresarial; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Asistente Secretaria</label>
                    <input name="AsistenteSecretaria" type="text" class="form-control" value="<?php echo $AsistenteSecretaria; ?>" placeholder="Update Title">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Correo Asistente Secretaria</label>
                    <input name="CorreoAsistenteSecretaria" type="text" class="form-control" value="<?php echo $CorreoAsistenteSecretaria; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Direccion Empresa</label>
                    <input name="DireccionEmpresa" type="text" class="form-control" value="<?php echo $DireccionEmpresa; ?>" placeholder="Update Title">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Direccion Residencia</label>
                    <input name="DireccionResidencia" type="text" class="form-control" value="<?php echo $DireccionResidencia; ?>" placeholder="Update Title">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Telefono Residencia</label>
                    <input name="TelefonoResidencia" type="text" class="form-control" value="<?php echo $TelefonoResidencia; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Celular Personal</label>
                    <input name="TelefonoResidencia" type="text" class="form-control" value="<?php echo $TelefonoResidencia; ?>" placeholder="Update Title">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Correo Personal</label>
                    <input name="CorreoPersonal" type="text" class="form-control" value="<?php echo $CorreoPersonal; ?>" placeholder="Update Title">
                </div>  
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Cedula</label>
                    <input name="Cedula" type="text" class="form-control" value="<?php echo $Cedula; ?>" placeholder="Update Title">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">idGenero</label>
                    <input name="idGenero" type="text" class="form-control" value="<?php echo $idGenero; ?>" placeholder="Update Title">
                </div>
                <br>
                <div class="form-group itemTwo"> <!-- City-->

                <button class="btn-success" name="update">
                Actualizar
                </button>
                   
                        <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                   
                </div>                   

        </div>
      </form>
      
    
 

<?php include('../../includes/footer.php'); ?>













      
  
