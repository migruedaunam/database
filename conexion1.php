<?php

/*
*     $myconexion es la variable que guarda la conexi�n y mysqli es  la palabra reservasda que se utiliza para crear la conexi�n
*
*/
$myconexion = new mysqli("localhost","root","", "alumnos");

/*
 *Despues de generar la conexi�n validamos si se establecio o no mandando un mensaje de error o de �xito si se logro establecer la conexi�n 
 */
if ($myconexion->connect_error) {
    die('Error en la conexión Conexión');
}
else{
	echo ' Se ha establecido la conexi�n con �xito... ' ;
}

/* se cierra la conexi�n, siempre que ya no se utilice una conexi�n tiene que ser cerrada ya que es espacio ocupado en el servidor de base de datos
*  y reduce  el rendimiento 
*/
$myconexion->close();
?>