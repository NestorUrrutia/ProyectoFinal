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
    
    $nombre=usuario($user);
    $apellido=surname($user);
    $tipo=tipo($user);
    $email=correo($user);
    $ciudad=cid_origen($user);
    $fech_nac=nacimiento($user);
    $telfijo=telefonofijo($user);
    $telcel=telefonocelular($user);
    
  ?>
  
  <form action= "actualizar_cuentasdeusuario.php" method="post">

    <div class="contenedor">
    
  <h2>General</h2>
  <hr/><br>
    <p>
      <label for="nombre">Nombre(s):</label><br>
      <input type="text" class="control" id="nombre" name="nombre" placeholder="Ingrese su nombre" name="nombre" value="<?php echo $nombre?>">
    </p><br>

   <p>
      <label for="Apellido">Apellido(s):</label><br>
      <input type="text" class="control" id="apellido" name="apellido" placeholder="Ingrese su apellido" name="apellido" value="<?php echo $apellido?>">
    </p><br>

    <p>
      <label for="tipo">Descripción:</label><br>
      <input type="text" class="control" readonly="readonly" id="tipo" name="tipo" value="<?php echo $tipo?>">
    </p><br>

  <p>
      <label for="email">Email:</label><br>
      <input type="email" class="control" name="email" id="email" placeholder="Ingrese su Correo electronico" name="email" value="<?php echo $email?>">
    </p><br>

    <p>
      <label for="cid_origen">Ciudad de origen:</label><br>
      <input type="text" class="control" name="cid_origen" id="cid_origen" placeholder="Ingrese su Ciudad de origen" name="cid_origen" value="<?php echo $ciudad?>">
    </p><br>

    <p>
      <label for="fec_nac">Fecha de Nacimiento:</label><br>
      <input type="date" class="control" name="fec_nac" id="fec_nac" placeholder="Ingrese su fecha de nacimiento" name="fec_nac" value="<?php echo $fech_nac?>">
    </p><br>

    <p>
      <label for="telefono">Telefono de Contacto:</label><br>
      <input type="text" class="control" name="telefonotel" id="telefonotel" placeholder="Tel Fijo" name="apellido" value="<?php echo $telfijo?>"><br>
      <input type="text" class="control" name="telefonocel" id="telefonocel" placeholder="Celular" name="apellido" value="<?php echo $telcel?>"><br>
    </p><br>

  

<!--
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me</label>
      </label>
    </div>-->

    <button type="submit" class="btn btn-primary">Actualizar Información</button>
    <br>
</div>
<br>

  </form>
  



</body>
<html>




