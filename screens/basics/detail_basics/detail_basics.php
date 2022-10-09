<?php include("../../dbConnect/db.php"); ?>
<?php include('../../includes/header.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!--  ESTILOS CSS -->
      <link rel="stylesheet" href="./Assets/style.css" >
      <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  </head>
  <body>
 

  <main class="container p-4">
  <div class="row">
   

   <!--  TABLA QUE RENDERIZA LOS DATOS GUARDADOS EN LA BASE DE DATOS  -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Asistencia</th>
            <th>Descripcion de la Asistencia</th>
           
            <th>Acccion</th>
          </tr>
        </thead>
        <tbody>

        <?php
        //
        //  SELECCIONA LA TABLA DE LA BASE DE DATOS CON CODIGO SQL 
        //
          $query = "SELECT * FROM asistencia";
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
            <td><?php echo $row['Asistencia']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <!-- EDITAR DATOS  -->
            <td>
              <!-- REDIRECCION EDITAR -->
              <a href="../edit/edit.php?IdAsistencia=<?php echo $row['IdAsistencia']?>" class="btn btn-secondary">
              <!-- ICONO EDITAR -->
                <i class="fas fa-marker"></i>
              </a>
              <!-- REDIRECCION ELIMINAR -->
              <a href="../delete/delete_task.php?IdAsistencia=<?php echo $row['IdAsistencia']?>" class="btn btn-danger">
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