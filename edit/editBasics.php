<?php
include('../../dbConnect/db.php');
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
    $TelefonoEmpresa = $row['TelefonoEmpresa'];
    $TelefonoEmpresaDirecto = $row['TelefonoEmpresaDirecto'];
    $CelularEmpresa = $row['CelularEmpresa'];
    $CorreoEmpresarial = $row['CorreoEmpresarial'];
    $AsistenteSecretaria = $row['AsistenteSecretaria'];
    $DireccionEmpresa = $row['DireccionEmpresa'];
    $DireccionResidencia = $row['DireccionResidencia'];
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
  $TelefonoEmpresa = $_POST['TelefonoEmpresa'];
  $TelefonoEmpresaDirecto= $_POST['TelefonoEmpresaDirecto'];
  $CelularEmpresa = $_POST['CelularEmpresa'];
  $CorreoEmpresarial= $_POST['CorreoEmpresarial'];
  $AsistenteSecretaria = $_POST['AsistenteSecretaria'];
  $DireccionEmpresa= $_POST['DireccionEmpresa'];
  $DireccionResidencia = $_POST['DireccionResidencia'];
  $CelularPersonal= $_POST['CelularPersonal'];
  $CorreoPersonal = $_POST['CorreoPersonal'];
  $Cedula= $_POST['Cedula'];
  $idGenero = $_POST['idGenero'];
  $idRangosEdad= $_POST['idRangosEdad'];
  
  $query = "UPDATE basicos set 
  TratamientoPersonal = '$TratamientoPersonal', Nombres = '$Nombres',
  Apellidos = '$Apellidos', OtroAcompanante = '$OtroAcompanante',
  Cargo = '$Cargo', TelefonoEmpresa = '$TelefonoEmpresa',
  TelefonoEmpresaDirecto = '$TelefonoEmpresaDirecto', CelularEmpresa = '$CelularEmpresa',
  CorreoEmpresarial = '$CorreoEmpresarial', AsistenteSecretaria = '$AsistenteSecretaria',
  DireccionEmpresa = '$DireccionEmpresa', DireccionResidencia = '$DireccionResidencia',
  CelularPersonal = '$CelularPersonal', CorreoPersonal = '$CorreoPersonal',
  Cedula = '$Cedula', idGenero = '$idGenero',
  idRangosEdad = '$idRangosEdad'
   WHERE IdBasicos=$IdBasicos";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../screens/users.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editUsers.php?IdBasicos=<?php echo $_GET['IdBasicos']; ?>" method="POST">
      <div>
          <h3>Editar basicos</h3>
      </div>
       <!--  <div class="form-group">
          <input name="titleUsers" type="text" class="form-control" value="<?php echo $titleUsers; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="descriptionUsers" class="form-control" cols="30" rows="10"><?php echo $descriptionUsers;?></textarea>
        </div> -->





        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../includes/footer.php'); ?>













      <!--  ESTILOS CSS -->
      <link rel="stylesheet" href="./Assets/styles.css" >
      <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  </head>
  <body>
    <br>
        <div class="title">
            <h1>Basicos</h1>
        </div>
    
    <div class="card-body conainer">

<form>
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
                    <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Apellidos">
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
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Cargo">
                </div> 
                <div class="form-group item"> <!-- City-->
                    <label for="city_id" class="control-label">Empresa</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Empresa">
                </div>
                <div class="form-group item"> <!-- City-->
                    <label for="city_id" class="control-label">Telefono Empresa</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Telefono Empresa">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Telefono Directo</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Telefono Directo">
                </div>      

                

        </div>
        <div class="container-space">
                
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Correo Empresaeial</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Correo Empresaeial">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Asistente Secretaria</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Asistente Secretaria">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Direccion Empresa</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Direccion Empresa">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Direccion Residencia</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Direccion Residencia">
                </div>
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Telefono Residencia</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Telefono Residencia">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Celular Personal</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Celular Personal">
                </div> 
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Correo Personal</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Correo Personal">
                </div>  
                <div class="form-group itemTwo"> <!-- City-->
                    <label for="city_id" class="control-label">Cedula</label>
                    <input type="text" class="form-control" id="city_id" name="city" placeholder="Cedula">
                </div>
                <br>
                <div class="form-group itemTwo"> <!-- City-->
                   
                        <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                   
                </div>                   

        </div>
        <div class="button">
        <div class="form-group item"> <!-- Submit Button -->
                    <button type="submit" class="btn btn-dark">ENVIAR </button>
                </div>
        </div>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>