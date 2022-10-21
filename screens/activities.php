<!-- INCLUIR BASE DE DATOS Y HEADER -->
<?php include("../dbConnect/db.php"); ?>
<?php include('../includes/header.php'); ?>

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
    <div class="col-md-4">
      <!-- SESSION MENSAJES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <div>
        <h1 style="width: 14rem;">Actividades</h1>
      </div>
      <!-- FORMURLARIO DEFINE METODO DE PETICION Y RUTA DE LOS DATOS -->
      <div class="card card-body">
        <form action="../save_tasks/save_taskActivities.php" method="POST">
          <div class="form-group">
            <input type="text" name="Actividad" class="form-control" placeholder="Actividad" autofocus>
          </div>
          <div class="form-group">
            <textarea name="Observaciones" rows="2" class="form-control" placeholder="Observaciones"></textarea>
          </div>
          <div style=" display: flex;justify-content: center;align-items: center;">
              <input 
              class="btn btn-outline-success btn-block" 
              style="border-radius:6px;width:12em;" 
              type="submit" 
              name="save_task" 
              value="Guardar"
              >
          </div>
        </form>
      </div>
    </div>

   <!--  TABLA QUE RENDERIZA LOS DATOS GUARDADOS EN LA BASE DE DATOS  -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Actividad</th>
            <th>Observaciones</th>
           
            <th>Acccion</th>
          </tr>
        </thead>
        <tbody>

        <?php
        //
        //  SELECCIONA LA TABLA DE LA BASE DE DATOS CON CODIGO SQL 
        //
          $query = "SELECT * FROM actividades";
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
            <td><?php echo $row['Actividad']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <!-- EDITAR DATOS  -->
            <td>
              <!-- REDIRECCION EDITAR -->
              <a href="../edit/editActivities.php?IdActividad=<?php echo $row['IdActividad']?>" class="btn btn-secondary">
              <!-- ICONO EDITAR -->
                <i class="fas fa-marker"></i>
              </a>
              <!-- REDIRECCION ELIMINAR -->
              <a href="../delete/delete_taskActivities.php?IdActividad=<?php echo $row['IdActividad']?>" 
              class="btn btn-danger"
              onclick="return confirmDelete()"
              >
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

<?php include('../includes/footer.php'); ?>
