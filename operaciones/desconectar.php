<?php
session_start();
	if ($_SESSION['email']) 
	{
		session_destroy(); 

		echo '<script language = javascript>
			alert("su sesion ha terminado correctamente")
			self.location = "/index.php"
		</script>';				
	} else {
		
		echo '<script language = javascript>
			alert("No ha iniciado ninguna sesion, por favor registrese")
			self.location="/index.php"
		</script>';
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Desconectando...</title>
</head>

<body>
</body>
</html>