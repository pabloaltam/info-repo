<?php
//Iniciar sesion
session_start();
//Validar si se esta ingresando con sesion correctamente
if(!$_SESSION){
}else{

	//VARIABLES DE SESION
	$mail				=	$_SESSION['email'];
	$nombre				=	$_SESSION['nombre'];
	$apellidos			=	$_SESSION['apellidos'];
	$fecha_creacion		=	$_SESSION['fecha_creacion'];
	$perfil_usuario		=	$_SESSION['perfil_usuario'];
	
}
?>