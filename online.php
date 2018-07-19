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


    
    $foto_perfil=buscar_online();
    
  ?>
  
 <div style="color: white">
    <h5>Usuarios Online</h5><br>
    <hr>
      <?php echo "$foto_perfil" ?>

</div>
  



</body>
<html>