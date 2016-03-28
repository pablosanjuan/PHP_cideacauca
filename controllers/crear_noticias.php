<?php
	include_once("../models/Datasource.php");
	include_once("../models/NoticiasDao.php");
	include_once("../models/Noticias.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);
	$ndao=new NoticiasDao();
	$titulo=$_POST["titulo"];
	$enlace=$_POST["enlace"];
	$descripcion=$_POST["descripcion"];
	$nomfoto=$_POST["nomfoto"];
	$noticia=new Noticias();
	$dirnot=$_FILES["foto"]["tmp_name"];
	$formatonot=substr($_FILES["foto"]["name"], strrpos($_FILES["foto"]["name"], ".") );  //Obtener la última aparición del punto y por consiguiente, el formato
	$destinonot=$notLocation."/noti_".$nomfoto.$formatonot;
	$ruta=substr($destinonot, 3);
	$noticia->setTitulo($titulo);
	$noticia->setEnlace($enlace);
	$noticia->setRuta($ruta);
	$noticia->setDescripcion($descripcion);
	if($ndao->create($conn,$noticia)&&move_uploaded_file($dirnot, $destinonot))
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