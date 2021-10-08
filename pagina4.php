<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Listado</title>
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

  <h3>Datos de la Persona Ingresada:</h3>
  <?php
  $mysql = new mysqli("localhost", "id17717474_peter", "i6^-Zh6%805QEL}s", "id17717474_rrhh");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select * from personas where IdPersona=$_REQUEST[IdPersona]") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr><th>Id</th><th>Apellido</th><th>Nombre</th><th>Nacimiento</th><th>Email</th><th>Telefono</th><th>DniPersona</th><th>Github</th><th>Linkedin</th><th>Pais</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['IdPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['ApellidoPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['NombrePersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['FechaPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['email'];
    echo '</td>';
    echo '<td>';
    echo $reg['MovilPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['DniPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['GithubPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['LinkedinPersona'];
    echo '</td>';
    echo '<td>';
    echo $reg['PaisPersona'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
</body>

</html>