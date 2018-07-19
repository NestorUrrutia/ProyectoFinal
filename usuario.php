<!DOCTYPE html>
<html lang="es">
<head>
<title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Aula Virtual</title>
	<link href="css/estilo1.css" rel="stylesheet" type="text/css">
	<link href="css/usuario_estilo.css" rel="stylesheet" type="text/css" media="all">

	<script language="javascript" src="js/jquery-3.3.1.min.js"></script>

	
	<script type="text/javascript">
		$(document).ready(function(){

			$("#users_online").load("online.php");
			$("#centro").load("inicio.php");

			$("#clic_curso").click(function(){
				$("#centro").load("informacion_curso.php");

			});
		});
	</script>
 	





	<script type="text/javascript">
		function carga_hora(){

		var fecha = new Date();
		var cadena_fecha,cadena_hora,hora,minutos;
				
		cadena_fecha=fecha.getDate()+"/"+(fecha.getMonth()+1)+"/"+fecha.getFullYear();
		
		if (fecha.getHours()<10)
			hora='0'+fecha.getHours();
		else
			hora=fecha.getHours();
		if (fecha.getMinutes()<10)
			minutos='0'+fecha.getMinutes();
		else
			minutos=fecha.getMinutes();

		cadena_hora= hora+":"+minutos;
		/*alert (cadena_fecha+" "+cadena_hora);*/
		document.getElementById("hora").innerHTML=cadena_fecha+" - "+cadena_hora;
		setTimeout("carga_hora()",1000);
	}

	</script>

	</title>
</head>
<body>

	<?php
		
		session_start();
		/*nombre de usuario*/
		$user=$_SESSION['USER'];
		
		include ("bases_de_datos.php");
		$con=conectar();
		
		$nombre=usuario($user);
		$foto_perfil="img/".foto($user);
		
	?>


	<header>

		<table  valign="middle" align="right" width="*%">
			<tr>
				<td>
					<?php
						$nombre=usuario($user);
						$tipo_usuario=tipo($user);
						echo $nombre."<br>".$tipo_usuario;
					?>
				</td>
				<td>
					<img id="imagen_user" src="<?php echo $foto_perfil ?>" id="imagen_user"></img>
				</td>
				<td>
					<div id="menu">
						<ul>
					  		<li class="nivel1"><a href="#" class="nivel1"></a>
							<ul>
								<li>
									<a class="primera" href="perfil.php" style="vertical-align: center">
										Perfil
									</a>
								</li>
								<li>
									<a href="#">
										Mensajes
									</a>
								</li>
								<li><a href="#">Preferencias</a></li>
								<li><a href="index.html"><?session_destroy();?>Cerrar Sesión</a></li>
							</ul>

					  		</li>
						</ul>
					</div>

					<!--
					<ul class="menu_config">
						<li><a href=""><img id="imagen_config" src="view-sequential.png"></img></a>
							<ul>
								<li><a href="">administracion</a></li>
								<li><a href="">cerrar sesion</a></li>
							</ul>
						</li>
					</ul>-->
				</td>
			</tr>
		</table> 
		<!--
		<div id="user">
			usuario<br>
			tipo
		</div>
		<div id="contendor_imagen">
			<img id="imagen_user" src="account-box.png"></img>
		</div>
		-->
	</header>

	<section id="muestra_hora">
		

		<!--
		<div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3435910"><br /></a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=America%2FArgentina%2FBuenos_Aires" width="100%" height="115" frameborder="0" seamless></iframe> </div>
		-->
		<table>
			
			<tr>
				<td style="width: 91%; text-align: left;">
					<div id="img_inicio">
						<a href="usuario.php">
										<img id="imagen_inicio" src="img/icon.png"></img>
									</a>
					</div>
				</td>
				<td style=" text-align: right;">
					<div id="hora">
						<script>
						carga_hora();
						setTimeout('document.location.reload()',3600*1000);
						</script>
					</div>
				</td>
			</tr>
		</table>

		
	</section>

	<section id="nav_lateral" >
		
		<nav class="menu">
                <ul>
                    <li>Inicio</li>
                    <li>	
						<div id="clic_curso">Curso</div>
					</li>
                    <li>
						<div>Boletin</div>
					</li>
                    <li>
						<div>Novedades</div>
					</li>
                    <li>
						<div>Archivos</div>
					</li>
                    <li>
						<div>Talleres</div>
					</li>
                    <li>
						</div>Contactos</div>
					</li>
                </ul>
    	</nav>

	</section>
	
	<section id="centro">
		dfdfdf
	</section>
	
	<section id="lateral">
		<div>
			<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=feu3tfqv3vo8aoqsichui4920g%40group.calendar.google.com&amp;color=%238C500B&amp;src=es.ar%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FArgentina%2FBuenos_Aires" style="border:solid 1px #777" width="250" height="250" frameborder="0" scrolling="no"></iframe>
		</div>

		<div id="users_online" style="margin-top: 15px; background-color: #1281A2;">
			
		</div>
	</section>

	


	
	
	
</body>
</html>