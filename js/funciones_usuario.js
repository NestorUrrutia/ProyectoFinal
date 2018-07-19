function carga_hora(){

	var fecha = new Date();
	var cadena_fecha,cadena_hora,hora,minutos;
			
	cadena_fecha=fecha.getDate()+"/"+(fecha.getMonth()+1)+"/"+fecha.getFullYear();
	
	if (fecha.getHours()<10)
		hora='0'+fecha.getHours();
	if (fecha.getMinutes()<10)
		minutos='0'+fecha.getMinutes();

	cadena_hora= hora+":"+minutos;
	/*alert (cadena_fecha+" "+cadena_hora);*/
	document.getElementById("hora").innerHTML=cadena_fecha+" -- "+cadena_hora;
	setTimeout("carga_hora()",1000);
}