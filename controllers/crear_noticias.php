<?php
	include_once("../models/Datasource.php");
	include_once("../models/NoticiasDao.php");
	include_once("../models/Noticias.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);
	$ndao=new NoticiasDao();
	$titulo=$_POST["titulo"];
	$enlace=$_POST["enlace"];
	$ruta=$_POST["ruta"];
	$descripcion=$_POST["descripcion"];
	$noticia=new Noticias();
	$noticia->setTitulo($titulo);
	$noticia->setEnlace($enlace);
	$noticia->setRuta($ruta);
	$noticia->setDescripcion($descripcion);
	if($ndao->create($conn,$noticia))
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_noticias.php">
		<script type="text/javascript">
			alert("Noticia creada");
		</script>
		<?php	
	}
	else
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_noticias.php">
		<script type="text/javascript">
			alert("Error creando la noticia");
		</script>
		<?php
	}
?>