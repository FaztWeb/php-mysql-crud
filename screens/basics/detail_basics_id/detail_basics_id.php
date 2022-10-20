 <!--  ESTILOS CSS -->
 <link rel="stylesheet" href="./Assets/style.css" >
<?php
include('../../../dbConnect/db.php');

if  (isset($_GET['IdBasicos'])) {
  $IdBasicos = $_GET['IdBasicos'];
  $query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    
  $Estado = $row['Estado'];
  $Tratamiento = $row['Tratamiento'];
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

?>

<?php include('../../../includes/header_detail_basics.php'); ?>

<main>
<div class="table table-responsive">

                            <?php


$query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
//
$result_tasks = mysqli_query($conn, $query);


while($row = mysqli_fetch_assoc($result_tasks)) { ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Indicativo</th>
      <th scope="col">-</th>
      <th scope="col"> </th>
      <th>Datos</th>
      <th>
        <p>
            Click para volver a Detalle 
            <a 
            href="../detail_basics/detail_basics.php">
                <strong>
                    Basicos
                </strong>
            </a>
        </p>
      </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">IdBasicos</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdBasicos']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Estado</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Estado']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Tratamiento</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Tratamiento']; ?></th></td>
      
      <tr>
      <th scope="row">TratamientoPersonal</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['TratamientoPersonal']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Nombres</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Nombres']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Apellidos</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Apellidos']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">OtroAcompanante</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['OtroAcompanante']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">IdAcompanantes</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Acompanantes']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Cargo</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Cargo']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Empresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Empresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">TelefonoEmpresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['TelefonoEmpresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">TelefonoEmpresaDirecto</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['TelefonoEmpresaDirecto']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">CelularEmpresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['CelularEmpresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">CorreoEmpresarial</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['CorreoEmpresarial']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">AsistenteSecretaria</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['AsistenteSecretaria']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">CorreoAsistenteSecretaria</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['CorreoAsistenteSecretaria']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">DireccionEmpresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['DireccionEmpresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">IdCiudadEmpresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdCiudadEmpresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">IdDepartamentoEmpresa</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdDepartamentoEmpresa']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">DireccionResidencia</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['DireccionResidencia']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">IdCiudadResidencia</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdCiudadResidencia']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">IdDepartamentoResidencia</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdDepartamentoResidencia']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">TelefonoResidencia</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['TelefonoResidencia']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">CelularPersonal</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['CelularPersonal']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">CorreoPersonal</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['CorreoPersonal']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Cedula</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Cedula']; ?></th></td>
      
    </tr>

    <tr>
      <th scope="row">Genero</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Genero']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Actividad</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Actividad']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Interes</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Interes']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">OrigenBD</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['OrigenBD']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Fecha Actualizacion</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['FechaActualizacion']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Evento</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Evento']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">Asistencia</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['Asistencia']; ?></th></td>
      
    </tr>
    <tr>
      <th scope="row">InvitadoPor</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['InvitadoPor']; ?></th></td>
      
    </tr>

    <tr>
      <th scope="row">IdRangoEdad</th>
      <td>-</td>
      <td><th scope="col" class="itremTD"><?php echo $row['IdRangoEdad']; ?></th></td>
      
    </tr>
    </tr>
    <?php } ?>
  </tbody>
</table>

    </div>
</main>
   

 <!-- BOOTRAP API -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<?php include('../../../includes/footer.php'); ?>