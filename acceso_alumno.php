<?php
	include ("bases_de_datos.php");

	$user=$_POST['nombre'];
	$pass=$_POST['password'];


	if (valida_usuario($user)=='noexiste'){
		echo"<script> alert('Usuario / contraseña incorrectos'); window.location = 'index.html';</script>";
		}
	else{
		if(valida_pass($user,$pass)=='no'){
			echo"<script> alert('Usuario / contraseña incorrectos'); window.location = 'index.html';</script>";
		}
		else{
			$password=acceso($user);
			if ($pass==$password){
				session_start();
				$_SESSION['USER']=$user;
				echo"<script> window.location = 'usuario.php';</script>";
			}
					
			else
				echo"<script> alert('Usuario / contraseña incorrectos'); window.location = 'index.html';</script>";
		}
	}
		
?>