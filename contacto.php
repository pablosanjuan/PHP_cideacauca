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
      <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    </head>

<body onload="initialize(), Materialize.showStaggeredList('#opciones-nav')" class="mapa">
<!-- ................   INICIALIZACION DE FACEBOOK   ........................-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=863470693719288";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<!--..........imagen corporativa............-->
<div class="container row" style="padding-top: 15px">
  <div class="col s12 m7">
    <a href="index.php"><img class="left-align responsive-img" src="images/cidea2.png"></a>
  </div>
</div>
<!-- ................   floating buttom   ........................-->
<div data-activates="slide-out" class="hide-on-large-only fixed-action-btn button-collapse" style="bottom: 35px; right: 24px;">
  <a class="btn-floating waves-effect waves-light btn-large black z-depth-5"><i class="material-icons">menu</i></a>
</div>
<!-- ................   NAVIGATION BAR   ........................-->
<nav class="be-black z-depth-5" >
<div class="container">
  <ul class="right hide-on-med-and-down">
    <li><a class="animation-nav active-nav" href="index.php">Inicio</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="nosotros.php">Nosotros</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="documentos.php">Documentos</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="experiencias.php">Experiencias</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="redecam.php">Redecam</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="contacto.php">Contacto</a></li>
  </ul>
  <!-- ................  MOBILE NAVIGATION BAR   ........................-->
  <ul id="slide-out" class="side-nav">
    <li><img style="margin-top: 10px" src="images/cidea.png" class="col s12 responsive-img"></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light mobile-item-nav nav-menu" href="index.php"><i class=" material-icons orange-text">home</i> Inicio</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light  mobile-item-nav nav-menu" href="nosotros.php"><i class=" material-icons green-text">account_circle</i> Nosotros</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light mobile-item-nav nav-menu" href="documentos.php"><i class=" material-icons blue-text">attachment</i> Documentos</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light mobile-item-nav nav-menu" href="experiencias.php"><i class=" material-icons brown-text">collections</i> Experiencias</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light mobile-item-nav nav-menu" href="redecam.php"><i class=" material-icons purple-text">filter_vintage</i> Redecam</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-light mobile-item-nav nav-menu" href="contacto.php"><i class=" material-icons red-text">contacts</i> Contacto</a></li>
    <div class="divider"></div>
  </ul>
  <a href="#" data-activates="slide-out" class="hide-on-med-and-down button-collapse"><i class="material-icons">menu</i></a>
</div>
</nav>
<!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
<!-- ................   FORM CONTACTO   ........................-->
  <div class="row container">
    <form class="col s12 m6 l6" method="POST" action="controllers/contacto.php">
    <h1 class="titulo1">Contactanos</h1>
    <h3 class="contenido3"> Para Cidea es importante contar con su opinion, contactanos por medio de correo electronico o buscanos en nuestras redes sociales.</h3>
      <div class="row">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="nombre" type="text" class="validate">
          <label for="icon_prefix">Nombre Completo</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" id="tel" name="numcel" type="tel" class="validate">
          <label for="icon_telephone">Telefono - Celular</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" class="validate">
          <label for="icon_telephone" data-error="ejemplo@cideacauca.com" data-success="Correo Correcto">Correo Electronico</label>
        </div>
      </div>
      <div class="input-field">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" name="mensaje" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Mensaje</label>
      </div>
      <button class="btn hoverable waves-effect waves-teal" type="submit">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>
    <div class="col s12 m6 l6 hide-on-small-and-down" style="z-index:-2">
      <img src="images/contacto.jpg" style="width:100%">
    </div>
  </div>
</br>
<div class="divider"></div>
</br>
 <!-- ................   Enlaces Patrocinados   ........................-->
<div class="row ">
<div>
  <h5 class="center-align">TITULO</h5>
</div>
 <ul class="center-align " style="background:#fff;">
      <li class="col s6 m2 l2 valign"><a href="https://www.minambiente.gov.co/" target="_blank" title="Min Ambiente"><img class="responsive-img" alt="Ministerio" style="width:90%;" src="images/patrocinadores/MinAmbiente.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.mincultura.gov.co" target="_blank" title="Min Cultura"><img class="responsive-img" style="width:90%;" src="images/patrocinadores/MinCultura.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.mintic.gov.co" target="_blank" title="Min TIC"><img class="responsive-img" style="width:90%;" src="images/patrocinadores/MinTIC.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.mineducacion.gov.co" target="_blank" title="Min Educación"><img class="responsive-img" style="width:90%;" src="images/patrocinadores/MinEducacion.png"></a></li>

      <li class="col s6 m2 l2 valign"><a href="http://crc.gov.co/" target="_blank" title="CRC"><img class="responsive-img" style="width:75%;" src="images/patrocinadores/CRC.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.colombiaaprende.edu.co" target="_blank" title="Colombia Aprende"><img class="responsive-img" style="width:120%;" src="images/patrocinadores/ColAprende.png"></a></li>   
      
  </ul>
  </div>
  <div class="row  ">
  <ul class="center-align" style="background:#fff">

      <li class="col s6 m2 l2 valign"><a href="http://www.cauca.gov.co/" target="_blank" title="Gob. del Cauca"><img class="responsive-img" style="width:70%;" src="images/patrocinadores/GobCauca1.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.sedcauca.gov.co/" target="_blank" title="Gob. del Cauca - Secretaría de Educación"><img class="responsive-img" style="width:70%;" src="images/patrocinadores/GobCaucaSE.png"></a></li>

       
      <li class="col s6 m2 l2 valign"><a href="http://www.unicauca.edu.co/" target="_blank" title="Universidad del Cauca"><img class="responsive-img" style="width:35%;" src="images/patrocinadores/unicauca.png"></a></li>

      <li class="col s6 m2 l2 valign"><a href="http://www.uniautonoma.edu.co/" target="_blank" title="Universidad Autónoma del Cauca"><img class="responsive-img" style="width:35%;" src="images/patrocinadores/uniautonoma.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://fup.edu.co/" target="_blank" title="Fundación Universitaria de Popayán"><img class="responsive-img" style="width:50%;" src="images/patrocinadores/fup.png"></a></li>
      <li class="col s6 m2 l2 valign"><a href="http://www.dstec.co" target="_blank" title="DSTec - Soluciones Tecnológicas"><img class="responsive-img" style="width:100%;" src="images/patrocinadores/dstec.png"></a></li>    
</ul>
</div>



<!-- ................   FOOTER   ........................-->
<footer class="be-grey">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
          <div id="map_canvas" style="width:auto; height:250px; margin-top:20px"></div>
      </div>
      <div class="col l3 m3 s12" style="margin-top:20px;">
        <h5 class="titulo-informativo">Contacto</h5>
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
          <h3 class="contenido-informativo"><i class="tiny material-icons">contact_phone</i><?php echo('  '.$fijo->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">phonelink_ring</i><?php echo('  '.$celular->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">comment</i><?php echo('  '.$correo->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">person_pin</i><?php echo('  '.$direccion->getDescripcion());?></h3>
          <h3 class="contenido-informativo"><i class="tiny material-icons">location_on</i> Popayan - Cauca</h3>
      </div>
      <div class="col l3 m3 s12" style="margin-top:20px;">
        <h5 class="titulo-informativo">Redes Sociales</h5>
          <h3 class="valign contenido-informativo"><span><img class="valign" width="9%" src="images/facebook.png"></span> Facebook</h3>
          <h3 class="valign contenido-informativo"><span><img class="valign" width="9%" src="images/twitter.png"></span> Twitter</h3>
      </div>
  </div>
</footer>
<div class="be-dark-black">
    <div>
      Desarrollado por DSTec Soluciones Tecnologicas
      <a class="grey-text text-lighten-4 right" href="http://dstec.co/">DSTEC.co</a>
    </div>
</div>
<!-- ................   LIBRERIAS  JQUERY   ........................-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
 </body>
</html>