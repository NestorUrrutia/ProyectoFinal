<?php

	function conectar(){

		$user="root";
		$pass="";
		$server="localhost";
		$db="aulavirtual";

		$con= mysqli_connect($server,$user,$pass,$db);
		if (!$con){
			die("conexion fallida".mysql_connect_error());
		}

		return $con;

	}

	function buscar_online(){

		$usuarios_online="";

		$query= "SELECT * FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		while ($fila=mysqli_fetch_assoc($resultado)){
			if ("1"==$fila['online']){
					$usuarios_online=$usuarios_online."<br>"."$fila[nombre]"." "."$fila[apellido]";
				}
			}
		

		cerrar();
		return("$usuarios_online");
	}

	function cerrar(){

		mysqli_close(conectar());
	}
	
	function acceso($usuario){

		$pass_usuario="";

		$query= "SELECT id_alumno, password FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($usuario==$fila['id_alumno']){
				$pass_usuario=$fila['password'];}
		}

		cerrar();
		return("$pass_usuario");
		
	}

	function valida_usuario($usuario){
		$esta="noexiste";

		$query= "SELECT id_alumno FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($usuario==$fila['id_alumno']){
				$esta="existe";}
		}

		return("$esta");
	}

	function valida_pass($usuario,$pass){
		$valido="no";

		$query= "SELECT id_alumno, password FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($usuario==$fila['id_alumno']){
				if ($pass==$fila['password']){
					$valido="si";
				}
			}
		}

		cerrar();
		return("$valido");
	}

	function usuario($nombre){

		$query= "SELECT id_alumno, nombre FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$nusuario=$fila['nombre'];
			}
		}

		cerrar();
		return("$nusuario");
	}

	function surname($nombre){

		$query= "SELECT id_alumno, apellido FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['apellido'];
			}
		}

		cerrar();
		return("$apellido");
	}


	function telefonocelular($nombre){

		$query= "SELECT id_alumno, tel_cel FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['tel_cel'];
			}
		}

		cerrar();
		return("$apellido");
	}


	function telefonofijo($nombre){

		$query= "SELECT id_alumno, tel_fijo FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['tel_fijo'];
			}
		}

		cerrar();
		return("$apellido");
	}




	function nacimiento($nombre){

		$query= "SELECT id_alumno, fecha_nacimiento FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['fecha_nacimiento'];
			}
		}

		cerrar();
		return("$apellido");
	}




	function cid_origen($nombre){

		$query= "SELECT id_alumno, ciudad_origen FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['ciudad_origen'];
			}
		}

		cerrar();
		return("$apellido");
	}



	function correo($nombre){

		$query= "SELECT id_alumno, email FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$apellido=$fila['email'];
			}
		}

		cerrar();
		return("$apellido");
	}

	function foto($nombre){

		$query= "SELECT id_alumno, foto FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$dire_foto=$fila['foto'];
			}
		}

		cerrar();
		return("$dire_foto");
	}

	function tipo($nombre){

		$query= "SELECT id_alumno, tipo FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$tipos_user=$fila['tipo'];
			}
		}

		cerrar();
		return("$tipos_user");
	}

	function curso($nombre){

		$query= "SELECT id_alumno, curso FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_alumno']){
				$tipos_user=$fila['curso'];
			}
		}

		cerrar();
		return("$tipos_user");
	}

	function buscar_curso($nombre){

		$usuarios_online="";
		$query= "SELECT curso,nombre,apellido FROM alumnos";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['curso']){

				$usuarios_online=$usuarios_online."<br>"."$fila[nombre]"." "."$fila[apellido]";
			}
		}

		cerrar();
		return("$usuarios_online");
	}


	function info($nombre){

		$usuarios_online="";
		$query= "SELECT * FROM curso";
		$resultado= mysqli_query(conectar(),$query);

		
		while ($fila=mysqli_fetch_assoc($resultado)){
			if ($nombre==$fila['id_curso']){

				$usuarios_online=$usuarios_online."<br>"."docente a cargo: "."$fila[docente]"."<br>"."Materias:"."$fila[materias]"."<br>"."Horario:"."$fila[horario]"."<br>"."Aula: "."$fila[aula]"."<br>"."turno: "."$fila[turno]";
			}
		}

		cerrar();
		return("$usuarios_online");
	}



?>