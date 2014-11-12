<?php
class Usuario
{
	function buscarUsuario($email)
	{
		/* asigno a una variable local el apellido */
		$v_email = $email;
		date_default_timezone_set("America/Santiago");
		/* conexion a la base de datos */
		include('../conexion/conexion.php');
	
		/* consulta SQL */
		$busca_usuario = "select * from usuarios where email like '%$v_email%'";
		
		$resultado = $conex->query($busca_usuario);
		
		/* Pasar resultados a un arreglo */
		$i=0;
		while($fila = $resultado->fetch_assoc()){
			$arreglo[$i] = array($fila['email'],$fila['nombre']);
			$i++;
		}	
		return $arreglo;
	}
}
;?>
