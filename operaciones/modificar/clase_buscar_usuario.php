<?php
if (\basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'clase_buscar_usuario') { echo '<script>alert("Que intentas hacer?");self.location="/index.php"</script>';die();}
class Usuario
{
	function buscarUsuario($email)
	{
		/* asigno a una variable local el apellido */
		$v_email = $email;
		date_default_timezone_set("America/Santiago");
		/* conexion a la base de datos */
		include('../../include/conexion.php');
	
		/* consulta SQL */
		$busca_usuario = "select * from usuarios where email like '%$v_email%'";
		$obj_conectar=new Conectar();
		$resultado = $obj_conectar->conectar()->query($busca_usuario);
		
		/* Pasar resultados a un arreglo */
		$i=0;
		while($fila = $resultado->fetch_assoc()){
			$arreglo[$i] = array($fila['email'],$fila['nombre'],$fila['apellido'],$fila['fecha_creacion']);
			$i++;
		}	
		return $arreglo;
	}
}
?>
