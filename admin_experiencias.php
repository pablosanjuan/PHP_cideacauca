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
<div class="col s12 m12 l9" style="margin-top:10px">
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Imagenes</a></li>
        <li class="tab col s3"><a href="#test2">Videos</a></li>
      </ul>
    </div>
    <!-- ................   EXPERIENCIAS EN IMAGENES   ........................-->
    <div id="test1" class="col s12">
    <br> ESTA SECCION VA LLENA DE FOTOS Y EXPERIENCIAS EN FOTOS
    </div>
    <!-- ................   EXPERIENCIAS EN VIDEOS   ........................-->
  <?php        
    include_once("models/Datasource.php");
    include_once("models/VideosDao.php");
    include_once("models/Videos.php");
    include_once("models/Variables.php");
    $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
    $videosdao=new VideosDao();
    $urlinicio=$videosdao->getObject($conn,1);
    $urlnosotros=$videosdao->getObject($conn,2);
  ?>
    <div id="test2" class="col s12">
  <form action="controllers/cambiar_videos.php" method="POST">
      <br>
      <button type="submit" class="waves-effect waves-light right btn"><i class="material-icons left">save</i>Guardar</button>
      <br><br>
      <h5 class="titulo4">Aqui puede cambiar el video que se muestra en inicio</h5>
      <div class="input-field">
          <i class="material-icons prefix">link</i>
          <input id="first_name" type="text" class="materialize-textarea" name="urlinicio">
          <label for="first_name">Link para video de Inicio</label>
      </div>
      <h5 class="contenido3">Previsualizacion:</h5>
        <div class="video-container">
          <iframe width="400" height="280" src="<?php echo($urlinicio->getUrl()); ?>" frameborder="1" allowfullscreen></iframe>
        </div>
      <br><br>
      <div class="divider"></div>
      <br>
      <h5 class="titulo4">Aqui puede cambiar el video Institucional que se muestra en Nosotros</h5>
      <div class="input-field">
          <i class="material-icons prefix">link</i>
          <input id="first_name" type="text" class="materialize-textarea" name="urlnosotros">
          <label for="first_name">Link para video de Inicio</label>
      </div>
      <h5 class="contenido3">Previsualizacion:</h5>
        <div class="video-container">
          <iframe width="400" height="280" src="<?php echo($urlnosotros->getUrl()) ?>" frameborder="1" allowfullscreen></iframe>
        </div>
      <br><br>
      <div class="divider"></div>
      <br>
  </form>
    </div>
</div>
</div>
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