<?php
	include_once("../models/Datasource.php");
	include_once("../models/InstitucionalDao.php");
	include_once("../models/Institucional.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);	
	$institdao=new InstitucionalDao();
	$somos=$institdao->getObject($conn,1);
	$mision=$institdao->getObject($conn,2);
	$vision=$institdao->getObject($conn,3);
	$funciones=$institdao->getObject($conn,4);
	$integrantes=$institdao->getObject($conn,5);
	$cambios=false;
	if(strlen($_POST["somos"])!=0)
	{
		$somos->setContenido($_POST["somos"]);
		$cambios=true;
	}
	if(strlen($_POST["mision"])!=0)
	{
		$mision->setContenido($_POST["mision"]);
		$cambios=true;
	}
	if(strlen($_POST["vision"])!=0)
	{
		$vision->setContenido($_POST["vision"]);
		$cambios=true;
	}
	if(strlen($_POST["funciones"])!=0)
	{
		$funciones->setContenido($_POST["funciones"]);
		$cambios=true;
	}
	if(strlen($_POST["integrantes"])!=0)
	{
		$integrantes->setContenido($_POST["integrantes"]);
		$cambios=true;
	}
	if($cambios)
	{
		if(($institdao->save($conn,$somos))&&($institdao->save($conn,$mision))&&($institdao->save($conn,$vision))&&($institdao->save($conn,$funciones))&&($institdao->save($conn,$integrantes)))
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_institucional.php">
			<script type="text/javascript">
				alert("Informaci\u00f3n de Contacto Cambiada Exitosamente 1");
			</script>
			<?php
		}
		else
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_institucional.php">
			<script type="text/javascript">
				alert("Error Cambiando La Informaci\u00f3n de Contacto");
			</script>
			<?php
		}
	}
	else
	{
		
		?>
			<meta http-equiv="REFRESH" content="0,../admin_institucional.php">
			<script type="text/javascript">
				alert("Informaci\u00f3n de Contacto Cambiada Exitosamente 2");
			</script>
		<?php
	}
?>