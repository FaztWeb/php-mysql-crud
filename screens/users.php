<!-- INCLUIR BASE DE DATOS Y HEADER -->
<?php include("../dbConnect/db.php"); ?>
<?php include('../includes/header.php'); ?>

<main class="container p-3">
  <div class="row">
    <div class="col-md-3">
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
            <h1 style="width: 14rem;">Basicos</h1>
        </div>
        <!-- FORMURLARIO DEFINE METODO DE PETICION Y RUTA DE LOS DATOS -->
        <div class="card card-body">
            <form action="../save_tasks/save_taskUsers.php" method="POST">
                    <div class="form-group">
                          <input type="text" name="Nombres" class="form-control" placeholder="Nombres" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="Empresa" class="form-control" placeholder="Empresa" autofocus>
                    </div>
                    <div  class="form-group">
                        <select class="form-select" aria-label="Default select example">
                            <option  selected>Ciudad</option>
                            <option value="1">Medellin</option>
                            <option value="2">Cali</option>
                            <option value="3">Barranquilla</option>
                        </select>
                  </div>
                  <div class="form-group">
                          <input type="text" name="TelefonoEmpresa" class="form-control" placeholder="TelefonoEmpresa" autofocus>
                    </div>
                    
                  <div  class="form-group">
                      <select class="form-select" aria-label="Default select example">
                            <option selected>Genero</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                      </select>
                  </div>
                  <div >
                      <textarea name="descriptionUsers" rows="2" class="form-control" placeholder="Descripcion"></textarea>
                  </div>
                      <input type="submit" name="save_basicos" class="btn btn-success btn-block" value="Guardar">
              </form>
        </div>
    </div>

    <!--  TABLA QUE RENDERIZA LOS DATOS GUARDADOS EN LA BASE DE DATOS  -->
    <div class="col-md-7">
          <table class="table table-bordered">
                <thead>
                      <tr>
                          <th>idBasicos</th>
                            <th>Nombre</th>
                            <th>apellido</th>
                            <th>Empresa</th>
                            <th>Ciudad</th>
                            <th>TelefonoEmpresaDirecto</th>
                            <th>Genero</th>
                          
                            <th>Acccion</th>
                      </tr>
                </thead>

                <tbody>

                      <?php
                        //
                        //  SELECCIONA LA TABLA DE LA BASE DE DATOS CON CODIGO SQL 
                        //
                          $query = "SELECT * FROM basicos, ciudades";
                        //
                        //SELECCIONA LA VARIBALE $conn del archivo ../dbConnect/db.php
                        //
                          $result_tasks = mysqli_query($conn, $query);    
                        //
                        //EL WHILE SE VA ENCARGAR DE ITERAR LOS DATOS DE LA BASE DE DATOS Y DEFINE COLUMNAS CON LA ASIGNACION $row =
                        //
                          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                          <tr >
                                <!-- DATOS A ITERAR --> 
                                
                                <td><a href="../details/detail.php"><?php echo $row['IdBasicos']; ?></a></td>
                                <td><?php echo $row['Nombres']; ?></td>
                                <td><?php echo $row['Apellidos']; ?></td>
                                <td><?php echo $row['Empresa']; ?></td>
                                <td><?php echo $row['Ciudad']; ?></td>
                                <td><?php echo $row['TelefonoEmpresa']; ?></td>
                                <td><?php echo $row['idGenero']; ?></td>
                                <!-- EDITAR DATOS  -->
                                <td>
                                      <!-- REDIRECCION EDITAR -->
                                      <a href="../edit/editUsers.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-secondary">
                                      <!-- ICONO EDITAR -->
                                        <i class="fas fa-marker"></i>
                                      </a>
                                      <!-- REDIRECCION ELIMINAR -->
                                      <a onchange="" href="../delete/delete_taskUsers.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-danger">
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



