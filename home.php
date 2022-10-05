<?php include('includes/header_home.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>PHP CRUD MYSQL</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/styles.css" >
   <!--  TIPO GRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="contentBody">
    
    <div class="grid ">

    <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Acompañastes</strong></h5>
      <p class="card-text">Esta tabla contiene la informacion de la tabla Acompañastes.</p>
      <a class="navbar-brand button" href="./screens/escorts.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Actividades</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de las Actividades .</p>
        <a class="navbar-brand button" href="./screens/activities.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Asistencia</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de la tabla Asistencia.</p>
        <a class="navbar-brand button" href="./screens/attendance.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Basicos</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Basicos.</p>
        <a class="navbar-brand button" href="./screens/basics.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col colum"> 
    <div class="cart">
      <div class="card-body cardBody">
        <h5 class="card-title"><strong>Ciudades</strong></h5>
        <p class="card-text">Esta tabla contiene informacion de la ciudades</p>
        <a class="navbar-brand button" href="./screens/cities.php">Ingresar</a>
        </button>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Departamento</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de la tabla Departamento.</p>
        <a class="navbar-brand button" href="./screens/department.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Estado</strong></h5>
      <p class="card-text">Esta tabla contiene la informacion de la tabla Estado.</p>
      <a class="navbar-brand button" href="./screens/state.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Eventos</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Eeventos .</p>
        <a class="navbar-brand button" href="./screens/event.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Generos</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Generos.</p>
        <a class="navbar-brand button" href="./screens/genders.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Usuarios</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Usuarios .</p>
        <a class="navbar-brand button" href="./screens/users.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Intereses</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Intereses .</p>
        <a class="navbar-brand button" href="./screens/interests.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Invitados Por</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de los Invitados Por .</p>
        <a class="navbar-brand button" href="./screens/guestsFrom.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Origen DB</strong></h5>
      <p class="card-text">Esta tabla contiene la informacion de la tabla Origen DB.</p>
      <a class="navbar-brand button" href="./screens/origindb.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Rango Edad</strong></h5>
      <p class="card-text">Esta tabla contiene la informacion de la tabla Rango Edad.</p>
      <a class="navbar-brand button" href="./screens/rangeAge.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Tratamiento</strong></h5>
      <p class="card-text">Esta tabla contiene la informacion de la tabla tratamiento.</p>
      <a class="navbar-brand button" href="./screens/treatment.php">Ingresar</a>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="cart">
      <div class="card-body">
      <h5 class="card-title"><strong>Usuarios</strong></h5>
        <p class="card-text">Esta tabla contiene la informacion de la tabla Asistencia.</p>
        <a class="navbar-brand button" href="./screens/users.php">Ingresar</a>
      </div>
    </div>
  </div>

    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<?php include('includes/footer.php'); ?>



 
  