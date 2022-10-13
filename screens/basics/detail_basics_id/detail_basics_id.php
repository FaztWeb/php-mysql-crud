 <!--  ESTILOS CSS -->
 <link rel="stylesheet" href="./Assets/styles.css" >
<?php
include('../../../dbConnect/db.php');

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

  }
}

?>

<?php include('../../../includes/header_detail_basics.php'); ?>

<main>
<div class="table table-responsive">
      <table class="table table-hover table-#dbd7d2"> 
        <thead>
        <tr>
            <th scope="col">IdBasicos</th>
            <th scope="col">IdEstado</th>
            <th scope="col">IdTratamiento</th>
            <th scope="col">TratamientoPersonal</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">OtroAcompanante</th>
            <th scope="col">IdAcompanantes</th>
            <th scope="col">Cargo</th>
            <th scope="col">Empresa</th>
            <th scope="col">TelefonoEmpresa</th>
            <th scope="col">TelefonoEmpresaDirecto</th>
            <th scope="col">CelularEmpresa</th>
            <th scope="col">CorreoEmpresarial</th>
            <th scope="col">AsistenteSecretaria</th>
            <th scope="col">CorreoAsistenteSecretaria</th>
            <th scope="col">DireccionEmpresa</th>
            <th scope="col">IDCiudadEmpresa</th>
            <th scope="col">iDDepartamento</th>
            <th scope="col">DireccionResidencia</th>
            <th scope="col">IDCiudadResidencia</th>
            <th scope="col">IdDepartamentoResidencia</th>

            <th scope="col">TelefonoResidencia</th>
            <th scope="col">CelularPersonal</th>
            <th scope="col">CorreoPersonal</th>
            <th scope="col">Cedula</th>
            <th scope="col">idGenero</th>
            

            
          </tr>
        </thead>
        <tbody >

        <?php


          $query = "SELECT * FROM basicos WHERE IdBasicos=$IdBasicos";
        //
          $result_tasks = mysqli_query($conn, $query);
          

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <!-- DATOS A ITERAR --> 
          <tr>
          <td class="itremTD"><?php echo $row['IdBasicos']; ?></td>
          <td class="itremTD"><?php echo $row['IdEstado']; ?></td>
          <td class="itremTD"><?php echo $row['IdTratamiento']; ?></td>
          <td class="itremTD"><?php echo $row['TratamientoPersonal']; ?></td>
            <td class="itremTD"><?php echo $row['Nombres']; ?></td>
            <td class="itremTD"><?php echo $row['Apellidos']; ?></td>
            <td class="itremTD"><?php echo $row['OtroAcompanante']; ?></td>
            <td class="itremTD"><?php echo $row['IdAcompanantes']; ?></td>
            <td class="itremTD"><?php echo $row['Cargo']; ?></td>
            <td class="itremTD"><?php echo $row['Empresa']; ?></td>
            <td class="itremTD"><?php echo $row['TelefonoEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['TelefonoEmpresaDirecto']; ?></td>
            <td class="itremTD"><?php echo $row['CelularEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['CorreoEmpresarial']; ?></td>
            <td class="itremTD"><?php echo $row['AsistenteSecretaria']; ?></td>
            <td class="itremTD"><?php echo $row['CorreoAsistenteSecretaria']; ?></td>
            <td class="itremTD"><?php echo $row['DireccionEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['IDCiudadEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['iDDepartamento']; ?></td>
            <td class="itremTD"><?php echo $row['DireccionResidencia']; ?></td>
            <td class="itremTD"><?php echo $row['IDCiudadResidencia']; ?></td>
            <td class="itremTD"><?php echo $row['IdDepartamentoResidencia']; ?></td>
            <td class="itremTD"><?php echo $row['TelefonoResidencia']; ?></td>
            <td class="itremTD"><?php echo $row['CelularPersonal']; ?></td>
            <td class="itremTD"><?php echo $row['CorreoPersonal']; ?></td>
            <td class="itremTD"><?php echo $row['Cedula']; ?></td>
            <td class="itremTD"><?php echo $row['idGenero']; ?></td>

            <!-- EDITAR DATOS  -->
            
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



