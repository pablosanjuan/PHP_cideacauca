<?php
	$nombre=$_POST["nombre"];
	$cel=$_POST["numcel"];
	$email=$_POST["email"];
	$mensaje=$_POST["mensaje"];
	$cadena="Se ha recibido un mensaje enocontrará detalles a continuación.
	<br>Información:<br>Nombre: ".$nombre."<br>Tel. Celular: ".$cel."
	<br>Email de contacto: ".$email."<br>Mensaje: ".$mensaje."<br><br>Cordialmente,
	<br>CIDEA Cauca<br>Mensaje enviado automáticamente";
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	if(mail("felbo22@gmail.com","<Cor></Cor>reo enviado correctamente a CIDEA Cauca",$cadena,$cabeceras))
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../contacto.php">
		<script type="text/javascript">
			alert("Mensaje correctamente enviado");
		</script>
		<?php
	}
	else
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../contacto.php">
		<script type="text/javascript">
			alert("No se pudo enviar tu mensaje");
		</script>
		<?php
	}

?>