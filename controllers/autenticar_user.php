<?php
	include_once("../models/Datasource.php");
	include_once("../models/UserDao.php");
	include_once("../models/User.php");
	include_once("../models/Variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);	
	$adao=new UserDao();
	$username=$_POST["username"];
	$password=$_POST["pass"];
	$abusqueda=new User();
	$abusqueda->setUser($username);
	$list=$adao->searchMatching($conn,$abusqueda);
	if(count($list)==0)
	{
		?>
		<script type="text/javascript">
			alert("No existe este usuario");
		</script>
		<Meta http-equiv="refresh" content="0,url=../sesion.php">
		<?php
	}
	else
	{
		$aobtenido=$list[0];
		if($password!=$aobtenido->getPass())
		{
			?>
			<script type="text/javascript">
				alert("Contrase\u00F1a incorrecta");
			</script>
			<Meta http-equiv="refresh" content="0,url=../sesion.php">
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Autenticaci\u00F3n exitosa");
			</script>
			<Meta http-equiv="refresh" content="0,url=../administrador.php">
			<?php
		}
	}
?>