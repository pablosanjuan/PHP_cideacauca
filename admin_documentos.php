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
    <li><a href="admin_institucional.html" class="collection-item titulo4">Institucional</a></li>
    <li><a href="admin_documentos.html" class="collection-item titulo4">Documentos de Interes</a></li>
    <li><a href="admin_experiencias.html" class="collection-item titulo4">Experiencias</a></li>
    <li><a href="admin_contacto.html" class="collection-item titulo4">Contacto</a></li>
    <li><a href="admin_user.html" class="collection-item titulo4">Password</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
</nav>
<!-- ................   COLLECTION IZQUIERDO   ........................-->
  <div class="row container">
    <div class="collection col s3 hide-on-med-and-down">
      <a href="admin_institucional.html" class="collection-item titulo4">Institucional</a>
      <a href="admin_documentos.html" class="collection-item titulo4">Documentos de Interes</a>
      <a href="admin_experiencias.html" class="collection-item titulo4">Experiencias</a>
      <a href="admin_contacto.html" class="collection-item titulo4">Contacto</a>
      <a href="admin_user.html" class="collection-item titulo4">Password</a>
    </div>
<!-- ................   CONTENIDO DERECHA   ........................-->    
  <div class="col s12 m12 l9" style="margin-top:10px">
    <h5 class="contenido2 center-align">Panel de Administrador para modificar los Documentos de Interes general a sus usuarios. Mostrada la Pestaña de usuario "Documentos"</h5>
    <br>
    <div class="divider col s12 m12 l12"></div>
    <br>
      <h5 class="titulo2 center-align">Documento Nuevo</h5>
      <br>
      <form action="submit">
        <div class="input-field">
            <i class="material-icons prefix">format_color_text</i>
            <input id="first_name" type="text" class="materialize-textarea">
            <label class="" for="first_name">Titulo</label>
        </div>
        <div class="input-field">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="first_name" type="text" class="materialize-textarea"></textarea>
            <label class="" for="first_name">Descripción</label>
        </div>
        <h5 class="titulo4">Agregar en:</h5>
        <p>
          <input name="group1" type="radio" id="test1" />
          <label for="test1">Normatividad</label>
        </p>
        <p>
          <input name="group1" type="radio" id="test2" />
          <label for="test2">Otros Documentos de Interes</label>
        </p>
        <br>
        <div class="file-field input-field">
          <div class="btn">
            <span>Archivo</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <br>
        <a class="waves-effect waves-light right btn"><i class="material-icons left">add</i>Agregar</a>
        <br>
    </form>  
    <br>
    <div class="divider col s12 m12 l12"></div>
    <br>
      <h5 class="titulo2 center-align col s12 m12 l12">Documentos Existentes</h5>
    <br>
      <h5 class="titulosub2 left-align col s12 m12 l12">Normatividad</h5>
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripción</th>
              <th data-field="price"></th>
              <th data-field="price"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ley 1549 del 2012</td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
          <tr>
            <td>Ley 1549 del 2012</td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
        </tbody>
    </table>
    <br>
      <h5 class="titulosub2 left-align col s12 m12 l12">Otros Documentos De Interes</h5>
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripción</th>
              <th data-field="price"></th>
              <th data-field="price"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ley 1549 del 2012</td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
          <tr>
            <td>Ley 1549 del 2012</td>
            <td>"Por la cual se fortalece la institucinoalización de la Politica Nacional de Educación Ambiental y su incorporación efectiva en el Desarrollo Territorial"</td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">create</i>Modificar</a></td>
            <td><a href="index.html" class="secondary-content valign-wrapper"><i class="material-icons valign">clear</i>Eliminar</a></td>
          </tr>
        </tbody>
    </table>
    <br>
    <div class="divider col s12 m12 l12"></div>
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