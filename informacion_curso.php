<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link href="css/style-cuentas_de_usuarios.css" rel="stylesheet" type="text/css" media="all">

</head>

<?php
    
    session_start();
    /*nombre de usuario*/
    $user=$_SESSION['USER'];
    
    include ("bases_de_datos.php");
    
    $numcurso=curso($user);
    $info=buscar_curso($numcurso);
    $informacion_curso=info($numcurso);
    
  ?>

<body>
  
  <img   style="margin-left: 30%; width: 40%; height: 45%; margin-top: 5%;" src="img/edit2pizarron1.jpg"></img>

  <div style="text-align: center;color: white">
    <h2>Informacion del curso</h2><br>
    <hr>
      <?php echo "$informacion_curso" ?>
  </div><hr>


  <div style="text-align: center;color: white">
    <h2>compañeros de curso</h2><br>
    <hr>
      <?php echo "$info" ?>
  </div>




 

  
  



</body>
<html>