<?php
	include_once("../models/Datasource.php");
	include_once("../models/UserDao.php");
	include_once("../models/User.php");
	include_once("../models/variables.php");
	$conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);	
	$usrDao=new UserDao();
	$username=$_POST["username"];
	$password=$_POST["pass"];
	$abusqueda=new User();
	$abusqueda->setUsuario($username);
	$list=$usrDao->searchMatching($conn,$abusqueda);
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
				alert("Contrasena incorrecta");
			</script>
			<Meta http-equiv="refresh" content="0,url=../sesion.php">
			<?php
		}
		else
		{
			?>
				<script type="text/javascript">
					alert("Autenticacion exitosa");
				</script>
				<Meta http-equiv="refresh" content="0,url=../administrador.php">
				<?php
		}
	}
?>