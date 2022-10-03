<!-- INCLUIR BASE DE DATOS Y HEADER -->
<?php include("../dbConnect/db.php"); ?>
<?php include('../includes/header.php'); ?>

<main class="container p-4">
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
          <h1 style="width: 14rem;">Usuarios</h1>
      </div>
      <!-- FORMURLARIO DEFINE METODO DE PETICION Y RUTA DE LOS DATOS -->
      <div class="card card-body">
      <form action="../save_tasks/save_taskUsers.php" method="POST">
          <div class="form-group">
            <input type="text" name="titleUsers" class="form-control" placeholder="Titulo" autofocus>
          </div>
          <div class="form-group">
            <div >
              <h4 >Genero</h4>
                  <div class="form-control">
                      <label>masculino<label>
                      <input type="checkbox">
                  </div>
                  <div class="form-control">
                      <label>femenino<label>
                      <input type="checkbox">
                  </div>
            </div>
          </div>
          <div class="form-control" class="form-group">
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
          </div>
          <div >
            <textarea name="descriptionUsers" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
          <input type="submit" name="save_taskUsers" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>

    <!--  TABLA QUE RENDERIZA LOS DATOS GUARDADOS EN LA BASE DE DATOS  -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
           
            <th>Acccion</th>
          </tr>
        </thead>
        <tbody>

          <?php
        //
        //  SELECCIONA LA TABLA DE LA BASE DE DATOS CON CODIGO SQL 
        //
          $query = "SELECT * FROM taskUsers";
        //
        //SELECCIONA LA VARIBALE $conn del archivo ../dbConnect/db.php
        //
          $result_tasks = mysqli_query($conn, $query);    
        //
        //EL WHILE SE VA ENCARGAR DE ITERAR LOS DATOS DE LA BASE DE DATOS Y DEFINE COLUMNAS CON LA ASIGNACION $row =
        //
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <!-- DATOS A ITERAR --> 
            <td><?php echo $row['titleUsers']; ?></td>
            <td><?php echo $row['descriptionUsers']; ?></td>
            <!-- EDITAR DATOS  -->
            <td>
              <!-- REDIRECCION EDITAR -->
              <a href="../edit/editUsers.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
              <!-- ICONO EDITAR -->
                <i class="fas fa-marker"></i>
              </a>
              <!-- REDIRECCION ELIMINAR -->
              <a href="../delete/delete_taskUsers.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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



