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
	$documento=new Documentos();
	$dirdoc=$_FILES["doc"]["tmp_name"];
	$formatodoc=substr($_FILES["doc"]["name"], strrpos($_FILES["doc"]["name"], ".") );  //Obtener la última aparición del punto y por consiguiente, el formato
	$destinoruta=substr($docLocation, 3);
	$destinodoc=$docLocation."/doc_".$titulo.$formatodoc;
	$destino=$destinoruta."/doc_".$titulo.$formatodoc;
	$documento->setTitulo($titulo);
	$documento->setDescripcion($descripcion);
	$documento->setTipo($tipo);
	$documento->setRuta($destino);
	$correcto=true;
	if($docdao->create($conn,$documento)&&move_uploaded_file($dirdoc, $destinodoc))
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