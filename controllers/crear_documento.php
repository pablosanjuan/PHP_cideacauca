<?php
	include_once("../models/Datasource.php");
	include_once("../models/DocumentosDao.php");
	include_once("../models/Documentos.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);
	$docdao=new DocumentosDao();
	$titulo=$_POST["titulo"];
	$descripcion=$_POST["descripcion"];
	$tipo=$_POST["group"];
	$ruta=$_POST["ruta"];
	$documento=new Documentos();
	$documento->setTitulo($titulo);
	$documento->setDescripcion($descripcion);
	$documento->setTipo($tipo);	
	if($docdao->create($conn,$documento))
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_documentos.php">
		<script type="text/javascript">
			alert("Documento Subido Exitosamente");
		</script>
		<?php	
	}
	else
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_documentos.php">
		<script type="text/javascript">
			alert("Error al Subir el Documento");
		</script>
		<?php
	}
?>