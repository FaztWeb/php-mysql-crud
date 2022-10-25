<?php include("../../../dbConnect/db.php"); ?>
<?php include('../../../includes/header_detail_basics.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!--  ESTILOS CSS -->
      <link rel="stylesheet" href="../Assets/stylex.css" >
      <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
<!-- ICONOS Fontawesome -->
    <script src="https://kit.fontawesome.com/272d0d9efe.js" crossorigin="anonymous"></script>

  </head>
  <body>


  <main class="container p-4">
  <script type="text/javascript">
      function confirmDelete(){
        var respuesta = confirm("esta seguro que quiere eliminar el registro?");
        if(respuesta === true){
          return true;
        }else{
          return false
        }
      }
  </script>
  <div class="row">

  <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
  <div>
      <h1>
        Basicos
      </h1>
  </div>
  <div>
  <form  action="detail_basics.php" method="get" class="searchForm">
          
          <div class="input-group mb-3">
                <div class="input-group-append">
                    <span 
                    class="input-group-text"
                    style="height:2.4em;
                     border-radius:6px;
                     position:absolute;
                     margin-right:2em;"
                    id="basic-addon2">Buscador
                  </span>
                </div>

                  <input 
                  name="busqueda" 
                  id="campo" 
                  type="text" 
                  class="form-control" 
                  placeholder="Ejemplo: adriana" 
                  aria-label="Recipient's username" 
                  aria-describedby="basic-addon2"
                  style="border-radius:6px;margin-left:4.50em; "
                  >

                  <div style="width:5em; padding-left:8px;" class="search">
                    <input 
                      type="submit" 
                      name="enviar"
                      class="btn btn-outline-success btn-block">
                      
                  </a>
              </div>
        </div>
           
          <div 
            style=" display:flex;justify-content:flex-end;align-items:center;margin-bottom:20px;">
            <a 
              class="btn btn-outline-success btn-block" 
              style="border-radius:6px;width:12em;" 
              href="../basics.php">Agregar Basicos
            </a>
          </div>
          <p>Clik en Enviar para desplegar datos </p>
      </form>

        
  </div>

    <!--  TABLA QUE RENDERIZA LOS DATOS GUARDADOS EN LA BASE DE DATOS  -->
    <div class="table">
      <table class="table table-hover table-#dbd7d2"> 
        <thead>
        <tr>
            <th scope="col">IdBasicos</th> 
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>

            <th scope="col">Empresa</th>
            <th scope="col">Telefono Empresa Directo</th>
            <th scope="col">ciudad Residencia</th>
            <th scope="col">CiudadEmpresa</th>

            
            
            
            <th scope="col">Acccion</th>
          </tr>
        </thead>
        <tbody >

        <?php

        $sql_registe = mysqli_query($conn, "SELECT COUNT(*) AS all_registers FROM basicos WHERE statusNumber = 1");
        $result_register = mysqli_fetch_array($sql_registe);
        $all_registers = $result_register['all_registers'];

        $for_page = 50;

        if(empty($_GET['page'])){
          $page = 1;
        }else{
          $page =$_GET['page'];
        };



$since = ($page-1) * $for_page;
$all_pages = ceil($all_registers / $for_page);


$query = mysqli_query($conn,"SELECT b.IdBasicos, b.Nombres, b.Apellidos, b.Empresa, b.TelefonoEmpresaDirecto, b.CelularEmpresa, 
                                    c.Ciudad AS ciudadResidencia,s.Ciudad AS CiudadEmpresa
                                    FROM basicos b 
                                    INNER JOIN ciudades c ON b.IdCiudadResidencia = c.IdCiudad
                                    INNER JOIN ciudades s ON b.IdCiudadEmpresa = s.IdCiudad WHERE statusNumber = 1
                                    ORDER BY b.IdBasicos ASC 
                                    LIMIT $since,$for_page
                                    ");
                                  
          $results = mysqli_num_rows($query);
          if($results > 0){
            while($row = mysqli_fetch_array($query)) { ?>
          
          

          
          <!-- DATOS A ITERAR --> 
          <tr>
          <td class="itremTD"><a href="../detail_basics_id/detail_basics_id.php?IdBasicos=<?php echo $row['IdBasicos']?>"><?php echo $row['IdBasicos']; ?></a></td>
            
            <td class="itremTD"><?php echo $row['Nombres']; ?></td>
            <td class="itremTD"><?php echo $row['Apellidos']; ?></td>

            <td class="itremTD"><?php echo $row['Empresa']; ?></td>
            <td class="itremTD"><?php echo $row['TelefonoEmpresaDirecto']; ?></td>
            <td class="itremTD"><?php echo $row['CelularEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['ciudadResidencia']; ?></td>
            <td class="itremTD"><?php echo $row['CiudadEmpresa']; ?></td>

           
            
            <!-- EDITAR DATOS  -->
            <td class="itremTD" >
              <!-- REDIRECCION EDITAR -->
              <a href="../../../edit/editBasics/editBasics.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-secondary">
              <!-- ICONO EDITAR -->
                <i class="fas fa-marker"></i>
              </a>
              <!-- REDIRECCION ELIMINAR -->
              <a href="../../../delete/delete_taskBasics.php?IdBasicos=<?php echo $row['IdBasicos']?>" 
              class="btn btn-danger"
              onclick="return confirmDelete()"
              >
              <!-- ICONO ELIMINAR -->
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>

          <?php
          }
           } ?>
        </tbody>
      </table>
      <div class="paginador">
            <ul>

            <?php
            if($page != 1){

            
            ?>
                <li><a href="?page=<?php echo 1; ?>">|<</a></li> <!-- 7:51 Paginador con php y mysql-21 -->
                <li><a href="?page=<?php echo $page -1; ?>"><<</a></li>
                <?php
}
                for($i=1; $i < $all_pages; $i++){
                  if($i == $page){
                    echo '<li class="pageSelected" >'.$i.'</li>';
                  }else{
                    echo '<li><a  href="?page='.$i.'">'.$i.'</a></li>';
                  }
                 
                }
                if($page != $all_pages){

                
                 ?>
                
              
                <li><a href="?page=<?php echo $page +1; ?>">>></a></li>
                <li><a href="?page=<?php echo $all_pages; ?>">>|</a></li>
            <?php  } ?>
            </ul>
      </div>
    </div>
  </div>
   <!-- BOOTRAP API -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</main>
  </body>
</html>







<!-- UPDATE basicos SET statusNumber = 1; -->