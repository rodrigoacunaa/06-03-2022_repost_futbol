<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <title>Futbol</title>
  </head>
  <body>
    <div id="div1">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Fútbol Argento <ion-icon name="football" style="vertical-align:-4px;"></ion-icon></a>
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

<!--form-->
          <form action="mod_validar_post.php" method="post">
                <center>
                <div class="shadow-lg p-3 mb-5 bg-black " class="card" style="padding-top:10px; width: 450px;border-color: darkred ;height: 360px;border-radius:30px; ">
                <div class="card-body">

                  <center>   

                  <h3>Iniciar Sesión</h3>
                  <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email del Postulante</label>
                <input style="width: 270px" type="email" class="form-control" name="email_name" placeholder="Ingrese su nombre Email de postulante" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Clave del Postulante</label>
                <input style="width: 270px" type="password" class="form-control" name="clave_name" placeholder="Clave unica del postulante" required>
              </div>
            <div>
              <button type="submit" class="btn btn-primary"  value="Log In" >Login!</button>
            </div>
              <div>
                               <a style="padding-left: 300px;" href="../formularios/form_apd.php">Registrate!</a>  
                               <a style="padding-left: 265px;" href="login_apd.php">Soy Apadrinador!</a> 
               </div>   
            </center>
                </div>
              </div>
              </center> 
              </form>
          </div>
          </div>

  <!--form-->        

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    

  
</div>

<!-- script type="text/javascript">

        function retraso1() {
        setTimeout(inicio, 1000);
        document.getElementById('div1').innerHTML = "<center><div class='spinner-grow text-dark ' role='status'></div></center>";

        function inicio(){window.location="modulo_validar_post.php";}    }
</script> -->
  </body>
</html>