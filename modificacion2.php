<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>Modificación de rubro.</title>
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
      <h1>Modificar</h1>
    <p>Aqui podras modificar el perfil de una persona</p> 
  </div>
  <?php
  $mysql = new mysqli("localhost", "id17717474_peter", "i6^-Zh6%805QEL}s", "id17717474_rrhh");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registro = $mysql->query("select * from personas where IdPersona=$_REQUEST[IdPersona]") or
    die($mysql->error);

  if ($reg = $registro->fetch_array()) {
  ?>
    <form method="post" action="modificacion3.php">
      Apellido:
      <input type="text" name="ApellidoPersona" size="50" value="<?php echo $reg['ApellidoPersona']; ?>">
      <br>
      Nombre:
      <input type="text" name="NombrePersona" size="50" value="<?php echo $reg['NombrePersona']; ?>">
      <br>
      Nacimiento:
      <input type="date" name="FechaPersona" size="50" value="<?php echo $reg['FechaPersona']; ?>">
      <br>
      Email:
      <input type="email" name="email" size="50" value="<?php echo $reg['email']; ?>">
      <br>
      Telefo:
      <input type="text" name="MovilPersona" size="50" value="<?php echo $reg['MovilPersona']; ?>">
      <br>
      DNI:
      <input type="text" name="DniPersona" size="50" value="<?php echo $reg['DniPersona']; ?>">
      <br>
      Github:
      <input type="text" name="GithubPersona" size="50" value="<?php echo $reg['GithubPersona']; ?>">
      <br>
      Linkedin:
      <input type="text" name="LinkedinPersona" size="50" value="<?php echo $reg['LinkedinPersona']; ?>">
      <br>
      Pais:
      <input type="text" name="PaisPersona" size="50" value="<?php echo $reg['PaisPersona']; ?>">
      <input type="hidden" name="IdPersona" value="<?php echo $_REQUEST['IdPersona']; ?>">
      <br>
      <button type="submit" class="btn btn-warning btn-sm">Modificar</button>
    </form>
  <?php
  } else
    echo 'No existe un rubro con dicho código';

  $mysql->close();

  ?>
</body>

</html>