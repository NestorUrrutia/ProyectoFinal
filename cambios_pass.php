<html>
<head>
  <link href="css/style-cuentas_de_usuarios.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>

  <?php
    
    session_start();
    /*nombre de usuario*/
    $user=$_SESSION['USER'];
    
    include ("bases_de_datos.php");
    $con=conectar();
    
    $password=acceso($user);
    
  ?>
  
  <form action= "actualizar_pass.php" method="post">
    
     <div class="contenedor">

    <h2>Contraseña</h2>
    <hr/><br>

    <p>
      <label for="pwd">Password Actual:</label><br>
      <input type="password" class="control" id="pwd" placeholder="Ingrese su password" name="pswd" value="<?php echo $password?>">
    </p><br>

    <p>
      <label for="pwd1">Nuevo Password:</label><br>
      <input type="password" class="control" id="pwd1" name= "nuevo_pass" placeholder="Ingrese su nuevo password" name="pwd1">
    </p><br>

    <p>
      <label for="pwd2">Nuevo Password (confirmacion):</label><br>
      <input type="password" class="control" id="pwd2" name="nuevo_pass_conf" placeholder="Ingrese su nuevo password" name="pwd2">
    </p><br>

    <button type="submit" class="btn btn-primary">Actualizar Información</button>
</div>

  </form>
 
</body>
<html>