<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">

    <title>Futbol</title>
  </head>
  <body>
    <div id="div1">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand"  onclick="retraso1()">Fútbol Argento <img src="img/logo.png" width="40px" height="40px"></a>
        <!--<ul class="navbar-nav ml-auto mr-5">
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit"><ion-icon name="search"></ion-icon></button>
            </form>
        </ul>-->
        <!--<a class='btn btn-primary my-2 my-sm-0 mr-3' type='button' href='#'>Login</a>-->
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipos.html">Equipos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Quiero postularme para un equipo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Quiero solicitar apadrinamiento</a>
                  </li>
            </ul>
        </div>
      </nav>
    <!-- /Navbar -->



    <div style="padding-top: 80px">
<form action="mod_validacion_uni.php" method="post">
      <center>
      <div class="shadow-lg p-3 mb-5 bg-black " class="card" style="padding-top:10px; width: 450px;border-color: darkred ;height: 360px;border-radius:30px; ">
      <div class="card-body">

        <center>   

        <h3>Iniciar Sesión</h3>
        <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email </label>
      <input style="width: 270px" type="email" class="form-control" name="email_name" placeholder="Ingrese su nombre Email " required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
      <input style="width: 270px" type="password" class="form-control" name="password_name" placeholder="Ingrese Su Contraseña" required>
    </div>
  <div>
    <button type="submit" class="btn btn-primary"  value="Log In" >Login!</button>
  </div>
    
  </center>
      </div>
    </div>
    </center>	
    </form>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
 

</html>