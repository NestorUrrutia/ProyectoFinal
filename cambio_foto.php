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
    
    $foto_perfil="img/".foto($user);
    
  ?>
  
  <form >
    
    <div class="contenedor">

      <h2>Foto</h2>
      <hr/><br>
  
      <p>
      <label for="foto_actual">Foto Actual:</label><br>

      <img src="<?php echo $foto_perfil ?>"" placeholder="foto actual"></img>
      </p><br>

      <p>
      <label for="nueva_imagen">Nueva Imagen:</label><br>
      <input type="file" class="form-control" id="nueva_imagen" name="nueva_imagen"><br>
    </p><br>


    <button type="submit" class="btn btn-primary">Actualizar Información</button>
</div>

  </form>
  



</body>
<html>