<!DOCTYPE html>
  <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="css/estilos.css"  media="screen,projection"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<!-- ................   CABECERA   ........................-->
  <div class="center-align">
    <img width="20%" src="images/cidea.png">
    <h5 class="titulo1">PANEL DE ADMINISTRACION</h5>
  </div>
<!-- ................   ESPACIO AZUL   ........................-->
  <div class="degradado center-align ">
    <h5 class="titulo2-blanco">Cidea Cauca</h5>
  </div>
<!-- ................   NAV MOBILE   ........................-->
<nav class="hide-on-large-only degradado">
  <ul id="slide-out" class="side-nav">
    <li class="titulo2">Opciones</li>
    <li><a href="admin_banner.php" class="collection-item titulo4">Banner</a></li>
    <li><a href="admin_noticias.php" class="collection-item titulo4">Noticias</a></li>
    <li><a href="admin_institucional.php" class="collection-item titulo4">Institucional</a></li>
    <li><a href="admin_documentos.php" class="collection-item titulo4">Documentos de Interes</a></li>
    <li><a href="admin_experiencias.php" class="collection-item titulo4">Experiencias</a></li>
    <li><a href="admin_contacto.php" class="collection-item titulo4">Contacto</a></li>
    <li><a href="admin_user.php" class="collection-item titulo4">Password</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</nav>
<!-- ................   COLLECTION IZQUIERDO   ........................-->
<div class="row container">
  <div class="collection col s3 hide-on-med-and-down">
    <a class="collection-header titulo2">Opciones</a>
    <a href="admin_banner.php" class="collection-item titulo4">Banner</a>
    <a href="admin_noticias.php" class="collection-item titulo4">Noticias</a>
    <a href="admin_institucional.php" class="collection-item titulo4">Institucional</a>
    <a href="admin_documentos.php" class="collection-item titulo4">Documentos de Interes</a>
    <a href="admin_experiencias.php" class="collection-item titulo4">Experiencias</a>
    <a href="admin_contacto.php" class="collection-item titulo4">Contacto</a>
    <a href="admin_user.php" class="collection-item titulo4">Password</a>
  </div>
<!-- ................   CONTENIDO DERECHA   ........................-->
<?php        
  include_once("models/Datasource.php");
  include_once("models/InstitucionalDao.php");
  include_once("models/Institucional.php");
  include_once("models/Variables.php");
  $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
  $institdao=new InstitucionalDao();
  $somos=$institdao->getObject($conn,1);
  $mision=$institdao->getObject($conn,2);
  $vision=$institdao->getObject($conn,3);
  $funciones=$institdao->getObject($conn,4);
  $integrantes=$institdao->getObject($conn,5);
?>
    <div class="col s12 m12 l9" style="margin-top:10px">
      <h5 class="contenido2 center-align">Panel de Administrador para modificar su información Institucional. Mostrada la Pestaña de usuario "Nosotros"</h5>
      <br>
      <form method="POST" action="controllers/cambiar_nosotros.php">
        <h5 class="titulosub2">Quienes Somos</h5>
        <div class="input-field">
            <textarea name="somos" id="first_name" type="text" class="materialize-textarea"><?php echo ($somos->getContenido()) ?></textarea>
            <label class="" for="first_name">Modificar Quienes Somos</label>
        </div>
        <h5 class="titulosub2">Misión</h5>
        <div class="input-field">
            <textarea name="mision" id="first_name" type="text" class="materialize-textarea"><?php echo ($mision->getContenido()) ?></textarea>
            <label class="" for="first_name">Modificar Misión</label>
        </div>
        <h5 class="titulosub2">Visión</h5>
        <div class="input-field">
            <textarea name="vision" id="first_name" type="text" class="materialize-textarea"><?php echo ($vision->getContenido()) ?></textarea>
            <label class="" for="first_name">Modificar Visión</label>
        </div>
        <h5 class="titulosub2">Funciones</h5>
        <div class="input-field col s12 m12 l6">
          <textarea name="funciones" id="first_name" type="text" class="materialize-textarea"><?php echo ($funciones->getContenido())?></textarea>
          <label class="" for="first_name">Modificar Funciones</label>
        </div>
        <h5 class="titulosub2">Integrantes</h5>
        <div class="input-field col s12 m12 l6">
          <textarea name="integrantes" id="first_name" type="text" class="materialize-textarea"><?php echo ($integrantes->getContenido()) ?></textarea>
          <label class="" for="first_name">Modificar Integrantes</label>
        </div>
      </div>
        <button type="submit" class="waves-effect waves-light right btn"><i class="material-icons left">save</i>Guradar</button>
      </form>
<!-- ................   LIBRERIAS  JQUERY   ........................-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript">
    var options = [
    {selector: '#vinculos', offset: 350, callback: 'Materialize.showStaggeredList("#vinculos")' }
    ];
    Materialize.scrollFire(options);
    </script>
 </body>
</html>