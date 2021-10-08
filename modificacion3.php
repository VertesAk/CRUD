<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>Modificación de datos.</title>
</head>

<body>
<nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="https://www.argentina.gob.ar/">
          <img src="images/esc.png" alt="logo" style="width:30px;">
        </a>
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Crear</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagina3.html">Borrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagina4.html">Consultar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modificacion.html">Modificar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagina5.php">Tabla</a>
          </li>
          </li>
        </ul>
      </nav>

  <?php
  $mysql = new mysqli("localhost", "id17717474_peter", "i6^-Zh6%805QEL}s", "id17717474_rrhh");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $mysql->query("update personas set NombrePersona='$_REQUEST[NombrePersona]', ApellidoPersona='$_REQUEST[ApellidoPersona]' , FechaPersona='$_REQUEST[FechaPersona]' , email='$_REQUEST[email]' , MovilPersona='$_REQUEST[MovilPersona]' ,DniPersona='$_REQUEST[DniPersona]' ,GithubPersona='$_REQUEST[GithubPersona]' , LinkedinPersona='$_REQUEST[LinkedinPersona]' , PaisPersona='$_REQUEST[PaisPersona]'  
  where IdPersona=$_REQUEST[IdPersona]") or
    die($mysql->error);

  echo 'Se modificaron los datos de la persona';

  $mysql->close();

  ?>
</body>

</html>