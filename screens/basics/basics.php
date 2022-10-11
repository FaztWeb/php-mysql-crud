<?php include("../../dbConnect/db.php"); ?>
<?php include('../../includes/header_basics.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--  ESTILOS CSS -->
    <link rel="stylesheet" href="./Assets/styles.css" >
    <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    </head>
    <body>
         <br>
        <div class="title">
            <h1>Agregar Basicos</h1>
        </div>
            <div class="card-body conainer">
                    <form action="../../save_tasks/save_taskBasics.php" method="POST">
                        <div class="container-space">
                      

                                <div class="form-group item  select ">
                                <div class="selectItems">
                                        <label for="state_id" class="control-label">Tratamiento Personal</label>
                                        <select class="form-control " name="TratamientoPersonal">
                                            <?php
                                                $query = "SELECT * FROM tratamiento";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <option 
                                                        value="AL"><?php echo $row['Tratamiento']; ?>
                                                </option>
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                </div>

                                <div class="form-group item">
                                    <label for="street1_id" class="control-label">Nombre</label>
                                    <input type="text" class="form-control"  name="Nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group item">
                                    <label for="street2_id" class="control-label">Apellidos</label>
                                    <input type="text" class="form-control"  name="Apellidos" placeholder="Apellidos">
                                </div>
                                <div class="form-group item">
                                    <label for="street2_id" class="control-label">Otro Acompanante</label>
                                    <input type="text" class="form-control"  name="OtroAcompanante" placeholder="OtroAcompanante">
                                </div>
                                <div class="form-group item"> <!-- City-->
                                    <label for="city_id" class="control-label">Cargo</label>
                                    <input type="text" class="form-control"  name="Cargo" placeholder="Cargo">
                                </div>
                                <div class="form-group item"> <!-- City-->
                                    <label for="city_id" class="control-label">Empresa</label>
                                    <input type="text" class="form-control"  name="Empresa" placeholder="Empresa">
                                </div>
                                <div class="form-group item"> <!-- City-->
                                    <label for="city_id" class="control-label">Telefono Empresa</label>
                                    <input type="text" class="form-control"  name="TelefonoEmpresa" placeholder="Telefono Empresa">
                                </div>
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">TelefonoEmpresaDirecto</label>
                                    <input type="text" class="form-control"  name="TelefonoEmpresaDirecto" placeholder=" TelefonoEmpresaDirecto">
                                </div> 
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Celular Empresa</label>
                                    <input type="text" class="form-control"  name="CelularEmpresa" placeholder=" CelularEmpresa">
                                </div> 

                                <div class="form-group select item gridSelect"> <!-- State Button -->
                                
                                    <div class="selectItems">
                                        <label for="state_id" class="control-label">Ciudad</label>
                                        <select class="form-control " name="Ciudad">
                                        <?php
                                                $query = "SELECT * FROM ciudades";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <option 
                                                        value="AL"><?php echo $row['Ciudad']; ?>
                                                </option>
                                            <?php } ?>
                                        </select> 
                                    </div> 
                                    <div class="selectItems">
                                        <label for="state_id" class="control-label">Genero</label>
                                        <select class="form-control" name="Genero">
                                        <?php
                                                $query = "SELECT * FROM generos";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <option 
                                                        value="AL"><?php echo $row['Genero']; ?>
                                                </option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
                                
                        </div>
                        <div class="container-space">
                                
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">CorreoEmpresarial</label>
                                    <input type="text" class="form-control"  name="CorreoEmpresarial" placeholder="Correo Empresaeial">
                                </div> 
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Asistente Secretaria</label>
                                    <input type="text" class="form-control"  name="AsistenteSecretaria" placeholder="Asistente Secretaria">
                                </div>
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">CorreoAsistenteSecretaria</label>
                                    <input type="text" class="form-control"  name="CorreoAsistenteSecretaria" placeholder="CorreoAsistenteSecretaria">
                                </div>  
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Direccion Empresa</label>
                                    <input type="text" class="form-control" name="DireccionEmpresa" placeholder="Direccion Empresa">
                                </div>
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Direccion Residencia</label>
                                    <input type="text" class="form-control" name="DireccionResidencia" placeholder="Direccion Residencia">
                                </div>
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Telefono Residencia</label>
                                    <input type="text" class="form-control"  name="TelefonoResidencia" placeholder="Telefono Residencia">
                                </div> 
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">CelularPersonal</label>
                                    <input type="text" class="form-control" name="CelularPersonal" placeholder="Celular Personal">
                                </div> 
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Correo Personal</label>
                                    <input type="text" class="form-control" name="CorreoPersonal" placeholder="Correo Personal">
                                </div>  
                                <div class="form-group itemTwo"> <!-- City-->
                                    <label for="city_id" class="control-label">Cedula</label>
                                    <input type="text" class="form-control" name="Cedula" placeholder="Cedula">
                                </div>
                                
                                <br>
                                <div class="form-group itemTwo"> <!-- City-->
                                        <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                                </div>                   
                        </div>
                        <div class="button">
                        <div class="form-group item"> <!-- Submit Button -->
                                    <button type="submit" name="save_task" class="btn btn-dark" value="Guardar">ENVIAR </button>
                                </div>
                        </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>