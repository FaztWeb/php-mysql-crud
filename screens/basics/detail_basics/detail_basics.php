<?php include("../../../dbConnect/db.php"); ?>
<?php include('../../../includes/header_detail_basics.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!--  ESTILOS CSS -->
      <link rel="stylesheet" href="../Assets/style.css" >
      <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  </head>
  <body>


  <main class="container p-4">
  <div class="row">


  <div>
      <h1>
        Basicos
      </h1>
  </div>
  <div>
      <form action="../../../search/search.php" method="get" class="searchForm">
          <div class="search">
            <label class="labelTitle">titulo: </label>
            <input class="searchInput" type="text" name="busquedaTitle" id="busquedaTitle" placeholder="Ejemplo: Nombres">
          </div>
          <div class="search">
            <label class="labelTitle labelTitleLarge">parametro a buscar: </label>
            <input class="searchInput" type="text" name="busquedaParams" id="busquedaParams" placeholder="Ejemplo: Adriana">
          </div>
          
            <div class="search">
            <input type="submit" value="buscar" class="btn_search">
          </div>
      </form>

          <div class="btnAgg ">
          <a class="navbar-brand button" href="../basics.php">Agregar Basicos</a>
          </div>
 
      
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
            <th scope="col">TelefonoEmpresa</th>
            <th scope="col">CelularEmpresa</th>
            
            <th scope="col">Acccion</th>
          </tr>
        </thead>
        <tbody >

        <?php
        //
        //  SELECCIONA LA TABLA DE LA BASE DE DATOS CON CODIGO SQL 
        //
          $query = "SELECT * FROM basicos";
          //
        //SELECCIONA LA VARIBALE $conn del archivo ../dbConnect/db.php
        //
          $result_tasks = mysqli_query($conn, $query);
          //
        //EL WHILE SE VA ENCARGAR DE ITERAR LOS DATOS DE LA BASE DE DATOS Y DEFINE COLUMNAS CON LA ASIGNACION $row =
        //    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <!-- DATOS A ITERAR --> 
          <tr>
            <td class="itremTD"><a href="../detail_basics_id/detail_basics_id.php"><?php echo $row['IdBasicos']; ?></a></td>
           
            <td class="itremTD"><?php echo $row['Nombres']; ?></td>
            <td class="itremTD"><?php echo $row['Apellidos']; ?></td>

            <td class="itremTD"><?php echo $row['Empresa']; ?></td>
            <td class="itremTD"><?php echo $row['TelefonoEmpresa']; ?></td>
            <td class="itremTD"><?php echo $row['CelularEmpresa']; ?></td>
            <!-- EDITAR DATOS  -->
            <td class="itremTD" >
              <!-- REDIRECCION EDITAR -->
              <a href="../../../edit/editBasics/editBasics.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-secondary">
              <!-- ICONO EDITAR -->
                <i class="fas fa-marker"></i>
              </a>
              <!-- REDIRECCION ELIMINAR -->
              <a href="../delete/delete_task.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-danger">
              <!-- ICONO ELIMINAR -->
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
   <!-- BOOTRAP API -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</main>
  </body>
</html>