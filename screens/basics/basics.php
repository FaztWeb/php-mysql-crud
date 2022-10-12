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
                                        <label  class="control-label">Tratamiento Personal</label>
                                    <!--  tratamiento codigo -->
                                    </div> 
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

                                <div class="form-group select item gridSelect"> <!-- State Button -->
                                
                                    <div class="selectItems">
                                        <label  class="control-label">Ciudad</label>
                                        <!-- codigo ciudad -->
                                    </div> 
                                    <div class="selectItems">
                                        <label  class="control-label">Genero</label>
                                    <!-- poner aqui codigo de genero  -->
                                    </div>
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
                                <div class="form-group itemTwo">
                                    <label  class="control-label">CorreoPersonal</label>
                                    <input type="text" class="form-control"  name="CorreoPersonal" placeholder="CorreoPersonal">
                                </div>
                                <div class="form-group itemTwo">
                                    <label  class="control-label">Cedula</label>
                                    <input type="text" class="form-control"  name="Cedula" placeholder="Cedula">
                                </div>                                
                                
                                
                                <div class="form-group itemTwo"> <!-- City-->
                                        <p>Click para Ver Detalle <a href="./detail_basics/detail_basics.php"><strong>Basicos</strong></a></p>
                                </div>                   
                        </div>
                        <div class="button">
                        <div class="form-group item"> <!-- Submit Button -->
                                    <button type="submit" name="save_taskBasics" class="btn btn-dark" value="Guardar">ENVIAR </button>
                                </div>
                        </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>