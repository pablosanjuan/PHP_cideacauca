<?php
  $nombre=$_POST["nombre"];
  $cel=$_POST["numcel"];
  $email=$_POST["email"];
  $mensaje=$_POST["mensaje"];
  $cadena="Mensaje de contacto recibido, encontrará los detalles a continuación:.<br><br>
  <br>Información:<br><br>Nombre: ".$nombre."<br>Tel. Celular: ".$cel."
  <br>Email de contacto: ".$email."<br><br>Mensaje: ".$mensaje."<br><br>Cordialmente,
  <br>CIDEA Cauca<br>Mensaje enviado automáticamente";
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  if(mail("info@cideacauca.com.co","Contacto CIDEA WEB",$cadena,$cabeceras))
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
      alert("Tu mensaje no pudo ser enviado, por favor intenta nuevamente");
    </script>
    <?php
  }

?>