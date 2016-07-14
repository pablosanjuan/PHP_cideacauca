<!DOCTYPE html>
  <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="css/estilos.css"  media="screen,projection"/>
      <!--..........metas............-->
      <title>CIDEA Cauca</title>
      <meta property="og:title" content="CIDEA Cauca" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.cideacauca.com.co" />
      <meta property="og:image" content="http://cideacauca.com.co/images/cidea.png" />
      <meta property="og:description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental" />
      <meta itemprop="name" content="CIDEA Cauca">
      <meta itemprop="description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental">
      <meta itemprop="image" content="http://cideacauca.com.co/images/cidea.png">
      <meta name="twitter:image" content="http://cideacauca.com.co/images/cidea.png">
      <!--..........FavIcons............-->
      <link rel="icon" type="image/ico" sizes="16x16" href="http://cideacauca.com.co/images/favicon/favicon16.png">
      <link rel="icon" type="image/ico" sizes="32x32" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="48x48" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="64x64" href="http://cideacauca.com.co/images/favicon/favicon64.png">
      <link rel="icon" type="image/ico" sizes="128x128" href="http://cideacauca.com.co/images/favicon/favicon128.png">        
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
<!-- ................   CABECERA   ........................-->
  <div class="center-align">
    <img width="20%" src="images/cidea.png">
    <h5 class="titulo1">PANEL DE ADMINISTRACION</h5>
  </div>
<!-- ................   CERRAR SESION  ........................-->
  <div class="container right-align col s12 m12 l12 row">
    <a href="index.php" class="cerrar right"><i class="material-icons left">close</i>Cerrar Sesion</a>
  </div>
<!-- ................   ESPACIO AZUL   ........................-->
  <div class="degradado center-align col s12 m12 l12">
    <h5 class="titulo2-blanco">Cidea Cauca</h5>
  </div>
<!-- ................   NAV MOBILE   ........................-->
<nav class="hide-on-large-only degradado">
  <ul id="slide-out" class="side-nav">
    <li class="titulo2">Opciones</li>
    <li><a href="admin_banner.php" class="collection-item titulo4">Banner</a></li>
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
    <a href="admin_institucional.php" class="collection-item titulo4">Institucional</a>
    <a href="admin_documentos.php" class="collection-item titulo4">Documentos de Interes</a>
    <a href="admin_experiencias.php" class="collection-item titulo4">Experiencias</a>
    <a href="admin_contacto.php" class="collection-item titulo4">Contacto</a>
    <a href="admin_user.php" class="collection-item titulo4">Password</a>
  </div>
<!-- ................   CONTENIDO DERECHA   ........................-->    
<div class="col s12 m12 l9" style="margin-top:10px">
  <h5 class="contenido2 center-align">Panel de Administrador para modificar los datos de Contacto que aparecen en todas las pestañas de usuario</h5>
  <br>
  <?php        
    include_once("models/Datasource.php");
    include_once("models/ContactoDao.php");
    include_once("models/Contacto.php");
    include_once("models/Variables.php");
    $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
    $contactdao=new ContactoDao();
    $fijo=$contactdao->getObject($conn,1);
    $celular=$contactdao->getObject($conn,2);
    $correo=$contactdao->getObject($conn,3);
    $direccion=$contactdao->getObject($conn,4);
  ?>
    <form method='POST' action='controllers/cambiar_contacto.php'>
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">contact_phone</i>
          <input name="fijo" id="icon_prefix" type="text" class="validate" value="<?php echo($fijo->getDescripcion()); ?>">
          <label for="icon_prefix" class="active">Telefono Fijo</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">phonelink_ring</i>
          <input name="celular" id="icon_telephone" type="tel" class="validate" value="<?php echo($celular->getDescripcion()); ?>">
          <label for="icon_telephone" class="active">Celular</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">comment</i>
          <input name="correo" id="email" type="email" class="validate" value="<?php echo($correo->getDescripcion()); ?>">
          <label for="email" data-error="correo@ejemplo.com" data-success="Correo Correcto" class="active">Correo</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">person_pin</i>
          <input name="direccion" id="icon_telephone" type="text" class="validate" value="<?php echo($direccion->getDescripcion()); ?>">
          <label for="icon_telephone" class="active">Direccion</label>
        </div>
      </div>
      <br>
        <button type="submit" class="waves-effect waves-light right btn"><i class="material-icons left">save</i>Guradar</button>
    </form>
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