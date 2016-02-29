<?php
	include_once("../models/Datasource.php");
	include_once("../models/BannerDao.php");
	include_once("../models/Banner.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);
	$bannerdao=new BannerDao();
	$titulo=$_POST["titulo"];
	$propietario=$_POST["propietario"];
	$baneer=new Banner();
	$dirfoto=$_FILES["foto"]["tmp_name"];
	$formatofoto=substr($_FILES["foto"]["name"], strrpos($_FILES["foto"]["name"], ".") );  //Obtener la última aparición del punto y por consiguiente, el formato
	$destinofoto=$bannerLocation."/img_".$titulo.$formatofoto;
	$ruta = substr($destinofoto, 3);    // devuelve "f"
	$baneer->setTitulo($titulo);
	$baneer->setPropietario($propietario);
	$baneer->setRuta($ruta);
	$correcto=true;
	if($bannerdao->create($conn,$baneer)&&move_uploaded_file($dirfoto, $destinofoto))
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_banner.php">
		<script type="text/javascript">
			alert("Imagen Subida Exitosamente");
		</script>
		<?php	
	}
	else
	{
		?>
		<meta http-equiv="REFRESH" content="0,url=../admin_banner.php">
		<script type="text/javascript">
			alert("Error al Subir la Imagen");
		</script>
		<?php
	}
?>