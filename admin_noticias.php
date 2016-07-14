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
    <h5 class="contenido2 center-align">Panel de Administrador para modificar las Noticias. Mostrada la Pestaña de usuario "Inicio"</h5>
    <br>
    <div class="divider col s12 m12 l12"></div>
    <br>
      <h5 class="titulo2 center-align">Nueva Noticia</h5>
      <br>
      <form enctype="multipart/form-data" method='POST' action='controllers/crear_noticias.php'>
        <div class="input-field">
          <i class="material-icons prefix">format_color_text</i>
          <input id="first_name" type="text" class="materialize-textarea" name="titulo">
          <label for="first_name">Titulo</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">link</i>
          <input id="first_name" type="text" class="materialize-textarea" name="enlace">
          <label for="first_name">Link</label>
        </div>
        <div class="file-field input-field">
          <div class="btn rigth">
            <span>Imagen de Apoyo</span>
            <input type="file" name="foto" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Solo Archivos con extension .jpg - .png">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" name="nomfoto">
          </div>
        </div>
        <br>
        <div class="input-field">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="first_name" type="text" class="materialize-textarea" name="descripcion"></textarea>
          <label class="" for="first_name">Descripción</label>
        </div>
        <br>
        <button type="submit" class="waves-effect waves-light right btn"><i class="material-icons left">add</i>Agregar</button>
        <br>
      </form>  
    <br>
    <div class="divider col s12 m12 l12"></div>
    <br>
      <h5 class="titulo2 center-align col s12 m12 l12">Noticias Existentes</h5>
    <br>
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="titulo">Titulo</th>
              <th data-field="name">Descripción</th>
              <th data-field="name">Link</th>
              <th data-field="name">Imagen</th>
              <th data-field="price"></th>
              <th data-field="price"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>Ley 1549 del 2012</b></td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a rel="stylesheet" href="http://materializecss.com/" target="blank">http://materializecss.com/</a></td>
            <td>Imagen</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
          <tr>
            <td><b>Ley 1549 del 2012</b></td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a rel="stylesheet" href="http://materializecss.com/" target="blank">http://materializecss.com/</a></td>
            <td>Imagen</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
        </tbody>
    </table>
    <br>
  </div>
  <div class="divider col s12 m12 l12"></div>
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