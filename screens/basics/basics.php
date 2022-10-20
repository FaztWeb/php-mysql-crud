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
    <link rel="stylesheet" href="./Assets/stylex.css" >
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
                    

                                <div class="form-group item gridSelect select ">
                                <div class="selectItems">
                                        <label  class="control-label">Tratamiento Personal</label>
                                    <select class="form-control " name="Tratamiento">
                                            <?php
                                                $query = "SELECT * FROM tratamiento";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $idTratamiento=$row['IdTratamiento'];
                                                    $Tratamiento=$row['Tratamiento'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $idTratamiento ?>" > <?php echo $row['Tratamiento']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                

                                
                                <div class="selectItems">
                                        <label  class="control-label">Acompañantes</label>
                                    <select class="form-control " name="Acompanantes">
                                            <?php
                                                $query = "SELECT * FROM acompanantes";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdAcompanantes=$row['IdAcompanantes'];
                                                    $Acompanantes=$row['Acompanantes'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdAcompanantes ?>" > <?php echo $row['Acompanantes']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Tratamiento Personal</label>
                                    <input type="text" class="form-control"  name="TratamientoPersonal" placeholder="Tratamiento Personal">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Nombre</label>
                                    <input type="text" class="form-control"  name="Nombres" placeholder="Nombre">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Apellidos</label>
                                    <input type="text" class="form-control"  name="Apellidos" placeholder="Apellidos">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Otro Acompanante</label>
                                    <input type="text" class="form-control"  name="OtroAcompanante" placeholder="OtroAcompanante">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Cargo</label>
                                    <input type="text" class="form-control"  name="Cargo" placeholder="Cargo">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">Empresa</label>
                                    <input type="text" class="form-control"  name="Empresa" placeholder="Empresa">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">TelefonoEmpresa</label>
                                    <input type="text" class="form-control"  name="TelefonoEmpresa" placeholder="TelefonoEmpresa">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">TelefonoEmpresaDirecto</label>
                                    <input type="text" class="form-control"  name="TelefonoEmpresaDirecto" placeholder="TelefonoEmpresaDirecto">
                                </div>
                                <div class="form-group item">
                                    <label  class="control-label">CelularEmpresa</label>
                                    <input type="text" class="form-control"  name="CelularEmpresa" placeholder="CelularEmpresa">
                                </div>
                                <div class="form-group item gridSelect select  ">
                                <div class="selectItems">
                                        <label  class="control-label">Asistencia</label>
                                    <select class="form-control " name="Asistencia">
                                            <?php
                                                $query = "SELECT * FROM asistencia";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdAsistencia=$row['IdAsistencia'];
                                                    $Asistencia=$row['Asistencia'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdAsistencia ?>" > <?php echo $row['Asistencia']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 

                                    <div class="selectItems">
                                        <label  class="control-label">Actividad</label>
                                    <select class="form-control " name="Actividad">
                                            <?php
                                                $query = "SELECT * FROM actividades";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdActividad=$row['IdActividad'];
                                                    $Actividad=$row['Actividad'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdActividad ?>" > <?php echo $row['Actividad']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                </div>


                                <div class="form-group item gridSelect select ">
                                <div class="selectItems">
                                        <label  class="control-label">Interes</label>
                                    <select class="form-control " name="Interes">
                                            <?php
                                                $query = "SELECT * FROM intereses";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdInteres=$row['IdInteres'];
                                                    $Interes=$row['Interes'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdInteres ?>" > <?php echo $row['Interes']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                

                                
                                <div class="selectItems">
                                        <label  class="control-label">Rango Edad</label>
                                    <select class="form-control " name="IdRangoEdad">
                                            <?php
                                                $query = "SELECT * FROM rangoedad";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdRangoEdad=$row['IdRangoEdad'];
                                                    $RangoEdad=$row['RangoEdad'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdRangoEdad ?>" > <?php echo $row['RangoEdad']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                </div>

                                <div class="form-group item gridSelect select ">
                                <div class="selectItems">
                                        <label  class="control-label">Departamento Residencia</label>
                                    <select class="form-control " name="IdDepartamentoResidencia">
                                            <?php
                                                $query = "SELECT * FROM departamento";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdDepartamento=$row['IdDepartamento'];
                                                    $Departamento=$row['Departamento'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdDepartamento ?>" > <?php echo $row['Departamento']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                

                                
                                    <div class="selectItems">
                                        <label  class="control-label">Ciudad Residencia </label>
                                    <select class="form-control " name="IdCiudadResidencia">
                                            <?php
                                                $query = "SELECT * FROM ciudades";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdCiudad=$row['IdCiudad'];
                                                    $Ciudad=$row['Ciudad'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdCiudad ?>" > <?php echo $row['Ciudad']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div>  
                                </div>

                                <div class="form-group item">
                                    <label  class="control-label">Fecha Actualizacion</label>
                                    <input type="text" class="form-control"  name="FechaActualizacion" placeholder="Fecha Actualizacion">
                                </div>

                                
                                
                        </div>
                        <div class="container-space">
                                <div class="form-group itemTwo">
                                    <label  class="control-label">CorreoEmpresarial</label>
                                    <input type="text" class="form-control"  name="CorreoEmpresarial" placeholder="CorreoEmpresarial">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">AsistenteSecretaria</label>
                                    <input type="text" class="form-control"  name="AsistenteSecretaria" placeholder="AsistenteSecretaria">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">CorreoAsistenteSecretaria</label>
                                    <input type="text" class="form-control"  name="CorreoAsistenteSecretaria" placeholder="CorreoAsistenteSecretaria">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">DireccionEmpresa</label>
                                    <input type="text" class="form-control"  name="DireccionEmpresa" placeholder="DireccionEmpresa">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">DireccionResidencia</label>
                                    <input type="text" class="form-control"  name="DireccionResidencia" placeholder="DireccionResidencia">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">TelefonoResidencia</label>
                                    <input type="text" class="form-control"  name="TelefonoResidencia" placeholder="TelefonoResidencia">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">CelularPersonal</label>
                                    <input type="text" class="form-control"  name="CelularPersonal" placeholder="CelularPersonal">
                                </div>

                                <div class="form-group item gridSelect select ">
                                <div class="selectItems">
                                        <label  class="control-label">Invitado Por</label>
                                    <select class="form-control " name="InvitadoPor">
                                            <?php
                                                $query = "SELECT * FROM invitadospor";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdInvitadoPor=$row['IdInvitadoPor'];
                                                    $InvitadoPor=$row['InvitadoPor'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdInvitadoPor ?>" > <?php echo $row['InvitadoPor']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                

                                
                                <div class="selectItems">
                                        <label  class="control-label">Origen BD</label>
                                    <select class="form-control " name="OrigenBD">
                                            <?php
                                                $query = "SELECT * FROM origenbd";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdOrigenBD=$row['IdOrigenBD'];
                                                    $OrigenBD=$row['OrigenBD'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdOrigenBD ?>" > <?php echo $row['OrigenBD']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 
                                </div>

                                <div class="form-group itemTwo">
                                    <label  class="control-label">CorreoPersonal</label>
                                    <input type="text" class="form-control"  name="CorreoPersonal" placeholder="CorreoPersonal">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">Cedula</label>
                                    <input type="text" class="form-control"  name="Cedula" placeholder="Cedula">
                                </div>
                                <div class="form-group item gridSelect select  ">
                                <div class="selectItems">
                                        <label  class="control-label">Ciudad Empresa </label>
                                    <select class="form-control " name="IdCiudadEmpresa">
                                            <?php
                                                $query = "SELECT * FROM ciudades";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdCiudad=$row['IdCiudad'];
                                                    $Ciudad=$row['Ciudad'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdCiudad ?>" > <?php echo $row['Ciudad']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 

                                    <div class="selectItems">
                                        <label  class="control-label">Genero</label>
                                    <select class="form-control " name="Genero">
                                            <?php
                                                $query = "SELECT * FROM generos";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdGenero=$row['IdGenero'];
                                                    $Genero=$row['Genero'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdGenero ?>" > <?php echo $row['Genero']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 

                                </div>

                                <div class="form-group item gridSelect select  ">
                                <div class="selectItems">
                                        <label  class="control-label">Estado</label>
                                    <select class="form-control " name="Estado">
                                            <?php
                                                $query = "SELECT * FROM estado";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdEstado=$row['IdEstado'];
                                                    $Estado=$row['Estado'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdEstado ?>" > <?php echo $row['Estado']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 

                                    <div class="selectItems">
                                        <label  class="control-label">Evento</label>
                                    <select class="form-control " name="Evento">
                                            <?php
                                                $query = "SELECT * FROM eventos";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdEvento=$row['IdEvento'];
                                                    $Evento=$row['Evento'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdEvento ?>" > <?php echo $row['Evento']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div> 

                                </div>

                                <div class="form-group itemTwo   ">
                                <div class="selectItems">
                                        <label  class="control-label">Departamento Empresa</label>
                                    <select class="form-control " name="IdDepartamentoEmpresa">
                                            <?php
                                                $query = "SELECT * FROM departamento";
                                                $result_tasks = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result_tasks)) { 
                                                    $IdDepartamento=$row['IdDepartamento'];
                                                    $Departamento=$row['Departamento'];   
                                                    ?>
                                                <option 
                                                        value="<?php echo $IdDepartamento ?>" > <?php echo $row['Departamento']; ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                


                               
                                                                
                                
                                
                                <div class="form-group itemTwo"> <!-- City-->
                                        <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                                </div>                   
                        </div>
                        <div class="button">
                        <div style="width: 10em;" class="form-group item"> <!-- Submit Button -->
                                    <button 
                                    type="submit" 
                                    name="save_taskBasics" 
                                    class="btn btn-outline-success btn-block" 
                                    value="Guardar">ENVIAR 
                                </button>
                                </div>
                        </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

