<?php
	include_once("../models/Datasource.php");
	include_once("../models/VideosDao.php");
	include_once("../models/Videos.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);	
	$videodao=new VideosDao();
	$urlinicio=$videodao->getObject($conn,1);
	$urlnosotros=$videodao->getObject($conn,2);
	$cambios=false;
	if(strlen($_POST["urlinicio"])!=0)
	{
		$urlinicio->setUrl($_POST["urlinicio"]);
		$cambios=true;
	}
	if(strlen($_POST["urlnosotros"])!=0)
	{
		$urlnosotros->setUrl($_POST["urlnosotros"]);
		$cambios=true;
	}
	if($cambios)
	{
		if(($videodao->save($conn,$urlinicio))&&($videodao->save($conn,$urlnosotros)))
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_experiencias.php">
			<script type="text/javascript">
				alert("Video Guardado");
			</script>
			<?php
		}
		else
		{
			?>
			<meta http-equiv="REFRESH" content="0,../admin_experiencias.php">
			<script type="text/javascript">
				alert("Error Cambiando el video");
			</script>
			<?php
		}
	}
	else
	{
		
		?>
			<meta http-equiv="REFRESH" content="0,../admin_contacto.php">
			<script type="text/javascript">
				alert("Video Guardado");
			</script>
		<?php
	}
?>