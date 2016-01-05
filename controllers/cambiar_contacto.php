<?php
	include_once("../models/Datasource.php");
	include_once("../models/ContactoDao.php");
	include_once("../models/Contacto.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);	
	$contactdao=new ContactoDao();
	$fijo=$contactdao->getObject($conn,1);
	$celular=$contactdao->getObject($conn,2);
	$correo=$contactdao->getObject($conn,3);
	$direccion=$contactdao->getObject($conn,4);
	$cambios=false;
	if(strlen($_POST["fijo"])!=0)
	{
		$fijo->setDescripcion($_POST["fijo"]);
		$cambios=true;
	}
	if(strlen($_POST["celular"])!=0)
	{
		$celular->setDescripcion($_POST["celular"]);
		$cambios=true;
	}
	if(strlen($_POST["correo"])!=0)
	{
		$correo->setDescripcion($_POST["correo"]);
		$cambios=true;
	}
	if(strlen($_POST["direccion"])!=0)
	{
		$direccion->setDescripcion($_POST["direccion"]);
		$cambios=true;
	}
	if($cambios)
	{
		if(($contactdao->save($conn,$fijo))&&($contactdao->save($conn,$celular))&&($contactdao->save($conn,$correo))&&($contactdao->save($conn,$direccion)))
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_contacto.php">
			<script type="text/javascript">
				alert("Informaci\u00f3n de Contacto Cambiada Exitosamente 1");
			</script>
			<?php
		}
		else
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_contacto.php">
			<script type="text/javascript">
				alert("Error Cambiando La Informaci\u00f3n de Contacto");
			</script>
			<?php
		}
	}
	else
	{
		
		?>
			<meta http-equiv="REFRESH" content="0,../admin_contacto.php">
			<script type="text/javascript">
				alert("Informaci\u00f3n de Contacto Cambiada Exitosamente 2");
			</script>
		<?php
	}
?>