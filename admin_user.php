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
    <li><a href="admin_institucional.php" class="collection-item titulo4">Institucional</a></li>
    <li><a href="admin_documentos.php" class="collection-item titulo4">Documentos de Interes</a></li>
    <li><a href="admin_experiencias.php" class="collection-item titulo4">Experiencias</a></li>
    <li><a href="admin_contacto.php" class="collection-item titulo4">Contacto</a></li>
    <li><a href="admin_user.php" class="collection-item titulo4">Password</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
</nav>
<!-- ................   COLLECTION IZQUIERDO   ........................-->
<div class="row container">
  <div class="collection col s3 hide-on-med-and-down">
    <a href="admin_institucional.php" class="collection-item titulo4">Institucional</a>
    <a href="admin_documentos.php" class="collection-item titulo4">Documentos de Interes</a>
    <a href="admin_experiencias.php" class="collection-item titulo4">Experiencias</a>
    <a href="admin_contacto.php" class="collection-item titulo4">Contacto</a>
    <a href="admin_user.php" class="collection-item titulo4">Password</a>
  </div>
<!-- ................   CONTENIDO DERECHA   ........................-->    
<div class="row col s12 m12 l9">
<br>
    <form>
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">lock_open</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Contraseña Anterior</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Nueva Contraseña</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Confirmar Contraseña</label>
        </div>
        <a class="waves-effect waves-light right btn"><i class="material-icons left">save</i>Guradar</a>
      </div>
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