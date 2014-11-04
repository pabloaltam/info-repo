<?php
	if ($_SESSION['id_user']) {
		session_destroy(); ?>
		<script language="JavaScript">
			alert("su sesion ha terminado correctamente");
			self.location = "index.html";
		</script>
		<?php
				
	} else {
		session_destroy();
		?>
		<script language="JavaScript">
			alert("No ha iniciado ninguna sesion, por favor registrese");
			self.location="index.html"
		</script>
		<?
	}
	
?>