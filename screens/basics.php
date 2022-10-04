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
                          <input type="text" name="TratamientoPersonal" class="form-control" placeholder="TratamientoPersonal" autofocus>
                    </div>
                    <!-- <div  class="form-group">
                    
                        <select name="Ciudad" class="form-select" aria-label="Default select example">
                            <option  selected>Ciudad</option>
                                    <?php
                                          $query = "SELECT * FROM  acompanantes";
                                          $result_tasks = mysqli_query($conn, $query);
                                          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                          <option value="1"><?php echo $row['Acompanantes']; ?></option>
                                     <?php } ?>
                        </select>
                  
                  </div> -->
                  <div class="form-group">
                          <input type="text" name="OtroAcompanante" class="form-control" placeholder="OtroAcompanante" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="Cargo" class="form-control" placeholder="Cargo" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="Empresa" class="form-control" placeholder="Empresa" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="number" name="TelefonoEmpresa" class="form-control" placeholder="Telefono Empresa" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="number" name="TelefonoEmpresaDirecto" class="form-control" placeholder="TelefonoEmpresaDirecto" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="email" name="CorreoEmpresarial" class="form-control" placeholder="CorreoEmpresarial" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="AsistenteSecretaria" class="form-control" placeholder="AsistenteSecretaria" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="email" name="CorreoAsistenteSecretaria" class="form-control" placeholder="CorreoAsistenteSecretaria" autofocus>
                    </div>
                    <div class="form-group">
                          <input type="text" name="DireccionEmpresa" class="form-control" placeholder="CorreoAsistenteSecretaria" autofocus>
                    </div>


                    <div  class="form-group">
                    
                        <select name="Ciudad" class="form-select" aria-label="Default select example">
                            <option  selected>Ciudad</option>
                                    <?php
                                          $query = "SELECT * FROM  ciudades";
                                          $result_tasks = mysqli_query($conn, $query);
                                          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                          <option value="1"><?php echo $row['Ciudad']; ?></option>
                                     <?php } ?>
                        </select>
                  
                  </div>
                  <div class="form-group">
                          <input type="text" name="TelefonoEmpresa" class="form-control" placeholder="TelefonoEmpresa" autofocus>
                    </div>
                    
                  <div  class="form-group">
                      <select name="idGenero" class="form-select" aria-label="Default select example">
                            <option selected>Genero</option>
                              <?php
                                    $query = "SELECT * FROM generos";
                                    $result_tasks = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <option value="1"><?php echo $row['Genero']; ?></option>
                              <?php } ?>
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
                          $query = "SELECT * FROM basicos";
                          
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
                                <td></td>
                                <td><?php echo $row['TelefonoEmpresa']; ?></td>
                                <td><?php echo $row['idGenero']; ?></td>
                                <!-- EDITAR DATOS  -->
                                <td>
                                      <!-- REDIRECCION EDITAR -->
                                      <a href="../edit/editBasics.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-secondary">
                                      <!-- ICONO EDITAR -->
                                        <i class="fas fa-marker"></i>
                                      </a>
                                      <!-- REDIRECCION ELIMINAR -->
                                      <a onchange="" href="../delete/delete_taskBasics.php?IdBasicos=<?php echo $row['IdBasicos']?>" class="btn btn-danger">
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



