<?php
include('../.././dbConnect/db.php');


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

$Tratamiento = '';
$Acompanantes= '';
$Genero= '';
$IdCiudadEmpresa= '';
$Asistencia= '';
$Actividad= '';
$IdRangoEdad= '';
$Interes= '';
$Estado= '';
$Evento= '';
$OrigenBD='';
$InvitadoPor= '';
$IdDepartamentoEmpresa= '';
$IdDepartamentoResidencia='';
$IdCiudadResidencia= '';
$FechaActualizacion= '';
$TratamientoPersonal= '';

if  (isset($_GET['IdBasicos'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

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

    $Tratamiento = $row['Tratamiento'];
    $Acompanantes= $row['Acompanantes'];
    $Genero = $row['Genero'];
    $IdCiudadEmpresa= $row['IdCiudadEmpresa'];
    $Asistencia= $row['Asistencia'];
    $Actividad = $row['Actividad'];
    $IdRangoEdad= $row['IdRangoEdad'];
    $Interes = $row['Interes'];
    $Estado= $row['Estado'];
    $Evento = $row['Evento'];
    $OrigenBD = $row['OrigenBD'];
    $InvitadoPor= $row['InvitadoPor'];
    $IdDepartamentoEmpresa = $row['IdDepartamentoEmpresa'];
    $IdDepartamentoResidencia = $row['IdDepartamentoResidencia'];
    $IdCiudadResidencia= $row['IdCiudadResidencia'];
    $FechaActualizacion = $row['FechaActualizacion'];
    $TratamientoPersonal= $row['TratamientoPersonal'];
  }
}

if (isset($_POST['update'])) {
  $IdBasicos = $_GET['IdBasicos'];
  
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

  $Tratamiento= $_POST['Tratamiento'];
  $Acompanantes= $_POST['Acompanantes'];
  $Genero= $_POST['Genero'];
  $IdCiudadEmpresa= $_POST['IdCiudadEmpresa'];
  $Asistencia= $_POST['Asistencia'];
  $Actividad= $_POST['Actividad'];
  $IdRangoEdad= $_POST['IdRangoEdad'];
  $Interes= $_POST['Interes'];
  $Estado= $_POST['Estado'];
  $Evento= $_POST['Evento'];
  $OrigenBD= $_POST['OrigenBD'];
  $InvitadoPor= $_POST['InvitadoPor'];
  $IdDepartamentoEmpresa= $_POST['IdDepartamentoEmpresa'];
  $IdDepartamentoResidencia= $_POST['IdDepartamentoResidencia'];
  $IdCiudadResidencia= $_POST['IdCiudadResidencia'];
  $FechaActualizacion= $_POST['FechaActualizacion'];
  $TratamientoPersonal= $_POST['TratamientoPersonal'];
  
  $query = "UPDATE basicos set 
 

   Nombres = '$Nombres',
  Apellidos = '$Apellidos', OtroAcompanante = '$OtroAcompanante',
  Cargo = '$Cargo',Empresa = '$Empresa', TelefonoEmpresa = '$TelefonoEmpresa',
  TelefonoEmpresaDirecto = '$TelefonoEmpresaDirecto', CelularEmpresa = '$CelularEmpresa',
  CorreoEmpresarial = '$CorreoEmpresarial', AsistenteSecretaria = '$AsistenteSecretaria',
  CorreoAsistenteSecretaria = '$CorreoAsistenteSecretaria',
  DireccionEmpresa = '$DireccionEmpresa', DireccionResidencia = '$DireccionResidencia',
  TelefonoResidencia = '$TelefonoResidencia',
  CelularPersonal = '$CelularPersonal', CorreoPersonal = '$CorreoPersonal',
  Cedula = '$Cedula',

  Tratamiento = '$Tratamiento',
  Acompanantes = '$Acompanantes', Genero = '$Genero',
  IdCiudadEmpresa = '$IdCiudadEmpresa',Asistencia = '$Asistencia', Actividad = '$Actividad',
  IdRangoEdad = '$IdRangoEdad', Interes = '$Interes',
  Estado = '$Estado', Evento = '$Evento',
  OrigenBD = '$OrigenBD',
  InvitadoPor = '$InvitadoPor', IdDepartamentoEmpresa = '$IdDepartamentoEmpresa',
  IdDepartamentoResidencia = '$IdDepartamentoResidencia',
  IdCiudadResidencia = '$IdCiudadResidencia', FechaActualizacion = '$FechaActualizacion',
  TratamientoPersonal = '$TratamientoPersonal'

   WHERE IdBasicos=$IdBasicos";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tabla actualizada con exito!';   /*  MENSAJE EMERGENTE CUANDO SE ACTUALIZA UNA TABLA */
  $_SESSION['message_type'] = 'warning';
  header('Location:../../screens/basics/detail_basics/detail_basics.php');
}

?>
<?php include('../../includes/header_basics.php'); ?>
<meta charset="UTF-8">
        <!--  ESTILOS CSS -->
    <link rel="stylesheet" href="./Assets/styless.css" >
        <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
      
     <br>
        <div class="title">
            <h1>Editar Basicos</h1>
        </div>
    
<div  class="card-body conainer">
    <form action="editBasics.php?IdBasicos=<?php echo $_GET['IdBasicos']; ?>" method="POST">
    <div class="container-space">
                    

                    <div class="form-group item gridSelect select ">
                    <div  class="selectItems">
                            <label  class="control-label">Tratamiento</label>
                        <select style="border-radius:8px;" class="form-control " name="Tratamiento">
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
                        <select style="border-radius:8px;" class="form-control " name="Acompanantes">
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
                    <div  class="form-group item">
                        <label  class="control-label">Tratamiento Personal</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="TratamientoPersonal"value="<?php echo $TratamientoPersonal; ?>" placeholder="Tratamiento Personal">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">Nombre</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="Nombres"value="<?php echo $Nombres; ?>" placeholder="Nombre">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">Apellidos</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="Apellidos"value="<?php echo $Apellidos; ?>" placeholder="Apellidos">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">Otro Acompanante</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="OtroAcompanante"value="<?php echo $OtroAcompanante; ?>" placeholder="OtroAcompanante">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">Cargo</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="Cargo"value="<?php echo $Cargo; ?>" placeholder="Cargo">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">Empresa</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="Empresa"value="<?php echo $Empresa; ?>" placeholder="Empresa">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">TelefonoEmpresa</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="TelefonoEmpresa"value="<?php echo $TelefonoEmpresa; ?>" placeholder="TelefonoEmpresa">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">TelefonoEmpresaDirecto</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="TelefonoEmpresaDirecto"value="<?php echo $TelefonoEmpresaDirecto; ?>" placeholder="TelefonoEmpresaDirecto">
                    </div>
                    <div class="form-group item">
                        <label  class="control-label">CelularEmpresa</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="CelularEmpresa"value="<?php echo $CelularEmpresa; ?>" placeholder="CelularEmpresa">
                    </div>
                    <div class="form-group item gridSelect select  ">
                    <div class="selectItems">
                            <label  class="control-label">Asistencia</label>
                        <select style="border-radius:8px;" class="form-control " name="Asistencia">
                                <?php
                                    $query = "SELECT * FROM asistencia";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdAsistencia=$row['IdAsistencia'];
                                        $Asistencia=$row['Asistencia'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdAsistencia ?>" > <?php echo $row['Asistencia']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 

                        <div class="selectItems">
                            <label  class="control-label">Actividad</label>
                        <select style="border-radius:8px;" class="form-control " name="Actividad">
                                <?php
                                    $query = "SELECT * FROM actividades";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdActividad=$row['IdActividad'];
                                        $Actividad=$row['Actividad'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdActividad ?>" > <?php echo $row['Actividad']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    </div>


                    <div class="form-group item gridSelect select ">
                    <div class="selectItems">
                            <label  class="control-label">Interes</label>
                        <select style="border-radius:8px;" class="form-control " name="Interes">
                                <?php
                                    $query = "SELECT * FROM intereses";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdInteres=$row['IdInteres'];
                                        $Interes=$row['Interes'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdInteres ?>" > <?php echo $row['Interes']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    

                    
                    <div class="selectItems">
                            <label  class="control-label">Rango Edad</label>
                        <select style="border-radius:8px;" class="form-control " name="IdRangoEdad">
                                <?php
                                    $query = "SELECT * FROM rangoedad";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdRangoEdad=$row['IdRangoEdad'];
                                        $RangoEdad=$row['RangoEdad'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdRangoEdad ?>" > <?php echo $row['RangoEdad']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    </div>

                    <div class="form-group item gridSelect select ">
                    <div class="selectItems">
                            <label  class="control-label">Departamento Residencia</label>
                        <select style="border-radius:8px;" class="form-control " name="IdDepartamentoResidencia">
                                <?php
                                    $query = "SELECT * FROM departamento";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdDepartamento=$row['IdDepartamento'];
                                        $Departamento=$row['Departamento'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdDepartamento ?>" > <?php echo $row['Departamento']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    

                    
                        <div class="selectItems">
                            <label  class="control-label">Ciudad Residencia </label>
                        <select style="border-radius:8px;" class="form-control " name="IdCiudadResidencia">
                                <?php
                                    $query = "SELECT * FROM ciudades";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdCiudad=$row['IdCiudad'];
                                        $Ciudad=$row['Ciudad'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdCiudad ?>" > <?php echo $row['Ciudad']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>  
                    </div>

                    <div class="form-group item">
                        <label  class="control-label">Fecha Actualizacion</label>
                        <input style="border-radius:8px;" type="date" class="form-control"  name="FechaActualizacion"value="<?php echo $FechaActualizacion; ?>" placeholder="Fecha Actualizacion">
                    </div>

                    
                    
            </div>
            <div class="container-space">
                    <div class="form-group itemTwo">
                        <label  class="control-label">CorreoEmpresarial</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="CorreoEmpresarial"value="<?php echo $CorreoEmpresarial; ?>" placeholder="CorreoEmpresarial">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">AsistenteSecretaria</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="AsistenteSecretaria"value="<?php echo $AsistenteSecretaria; ?>" placeholder="AsistenteSecretaria">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">CorreoAsistenteSecretaria</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="CorreoAsistenteSecretaria"value="<?php echo $CorreoAsistenteSecretaria; ?>" placeholder="CorreoAsistenteSecretaria">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">DireccionEmpresa</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="DireccionEmpresa"value="<?php echo $DireccionEmpresa; ?>" placeholder="DireccionEmpresa">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">DireccionResidencia</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="DireccionResidencia"value="<?php echo $DireccionResidencia; ?>" placeholder="DireccionResidencia">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">TelefonoResidencia</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="TelefonoResidencia"value="<?php echo $TelefonoResidencia; ?>" placeholder="TelefonoResidencia">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">CelularPersonal</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="CelularPersonal"value="<?php echo $CelularPersonal; ?>" placeholder="CelularPersonal">
                    </div>

                    <div class="form-group item gridSelect select ">
                    <div class="selectItems">
                            <label  class="control-label">Invitado Por</label>
                        <select style="border-radius:8px;" class="form-control " name="InvitadoPor">
                                <?php
                                    $query = "SELECT * FROM invitadospor";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdInvitadoPor=$row['IdInvitadoPor'];
                                        $InvitadoPor=$row['InvitadoPor'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdInvitadoPor ?>" > <?php echo $row['InvitadoPor']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    

                    
                    <div class="selectItems">
                            <label  class="control-label">Origen BD</label>
                        <select style="border-radius:8px;" class="form-control " name="OrigenBD">
                                <?php
                                    $query = "SELECT * FROM origenbd";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdOrigenBD=$row['IdOrigenBD'];
                                        $OrigenBD=$row['OrigenBD'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdOrigenBD ?>" > <?php echo $row['OrigenBD']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    </div>

                    <div class="form-group itemTwo">
                        <label  class="control-label">CorreoPersonal</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="CorreoPersonal"value="<?php echo $CorreoPersonal; ?>" placeholder="CorreoPersonal">
                    </div>
                    <div class="form-group itemTwo">
                        <label  class="control-label">Cedula</label>
                        <input style="border-radius:8px;" type="text" class="form-control"  name="Cedula"value="<?php echo $Cedula; ?>" placeholder="Cedula">
                    </div>
                    <div class="form-group item gridSelect select  ">
                    <div class="selectItems">
                            <label  class="control-label">Ciudad Empresa </label>
                        <select style="border-radius:8px;" class="form-control " name="IdCiudadEmpresa">
                                <?php
                                    $query = "SELECT * FROM ciudades";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdCiudad=$row['IdCiudad'];
                                        $Ciudad=$row['Ciudad'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdCiudad ?>" > <?php echo $row['Ciudad']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 

                        <div class="selectItems">
                            <label  class="control-label">Genero</label>
                        <select style="border-radius:8px;" class="form-control " name="Genero">
                                <?php
                                    $query = "SELECT * FROM generos";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdGenero=$row['IdGenero'];
                                        $Genero=$row['Genero'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdGenero ?>" > <?php echo $row['Genero']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 

                    </div>

                    <div class="form-group item gridSelect select  ">
                    <div class="selectItems">
                            <label  class="control-label">Estado</label>
                        <select style="border-radius:8px;" class="form-control " name="Estado">
                                <?php
                                    $query = "SELECT * FROM estado";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdEstado=$row['IdEstado'];
                                        $Estado=$row['Estado'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdEstado ?>" > <?php echo $row['Estado']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 

                        <div class="selectItems">
                            <label  class="control-label">Evento</label>
                        <select style="border-radius:8px;" class="form-control " name="Evento">
                                <?php
                                    $query = "SELECT * FROM eventos";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdEvento=$row['IdEvento'];
                                        $Evento=$row['Evento'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdEvento ?>" > <?php echo $row['Evento']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 

                    </div>

                    <div class="form-group itemTwo">
                    <div class="selectItems">
                            <label  class="control-label">Departamento Empresa</label>
                        <select style="border-radius:8px;" class="form-control " name="IdDepartamentoEmpresa">
                                <?php
                                    $query = "SELECT * FROM departamento";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result_tasks)) { 
                                        $IdDepartamento=$row['IdDepartamento'];
                                        $Departamento=$row['Departamento'];   
                                        ?>
                                    <option 
                                            value="<?php echo $IdDepartamento ?>" > <?php echo $row['Departamento']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    


                   
                                                    
                    
                    
                    <div class="form-group itemTwo"> <!-- City-->
                            <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                    </div>                   
            </div>
            <div class="button">
            <div style="width: 10em;" class="form-group item"> <!-- Submit Button -->
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
