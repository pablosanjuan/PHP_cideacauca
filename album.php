<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="Sin_titulo1.css" rel="stylesheet">
      <link href="index.css" rel="stylesheet">
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
      <link rel="icon" type="image/ico" sizes="16x16" href="http://cideacauca.com.co/images/FavIcon/favicon16.png">
      <link rel="icon" type="image/ico" sizes="32x32" href="http://cideacauca.com.co/images/FavIcon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="48x48" href="http://cideacauca.com.co/images/FavIcon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="64x64" href="http://cideacauca.com.co/images/FavIcon/favicon64.png">
      <link rel="icon" type="image/ico" sizes="128x128" href="http://cideacauca.com.co/images/FavIcon/favicon128.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    </head>

<body onload="initialize(), Materialize.showStaggeredList('#opciones-nav')">
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
<div class="container row right-align" style="padding-top: 15px">
  <div class="col s12 m7">
    <a href="index.php"><img class="left-align responsive-img" src="images/cidea2.png"></a>
  </div>
  <div class="container col s12 m5 hide-on-med-and-down" style="padding-top: 22px">
    <div class="col s12 m2 offset-m6 opacos">
      <a target="_blanck" href="https://www.facebook.com/CideaCauca/"><img class="left-align responsive-img" src="images/facebook.png"></a></div>
    <div class="col s12 m2 opacos">
      <a target="_blanck" href="https://www.youtube.com/channel/UCGRpTPDYmTILxLHdQ1WM3sg"><img class="left-align responsive-img" src="images/youtube.png"></a>
    </div>
    <div class="col s12 m2 opacos">
      <a target="_blanck" href="https://www.twitter.com/CideaCauca/"><img class="left-align responsive-img" src="images/twitter.png"></a>
    </div>
  </div>
</div>
<!-- ................   NAVIGATION BAR   ........................-->
<nav class="be-black z-depth-3" >
<div class="container">
  <ul class="right hide-on-med-and-down">
    <li><a class="animation-nav" href="index.php">Inicio</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="nosotros.php">Nosotros</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="documentos.php">Documentos</a></li>
    <li class="divider-vertical-second-menu"></li><li><a class="active-nav animation-nav" href="experiencias.php">Experiencias</a></li>
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
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</div>
</nav>
<br><br>

<div class="row container">
<div class="slider">
    <ul class="slides">
      <li>
        <img class="" src="images/somos.jpg">
      </li>
      <li>
        <img class="" src="images/somos.jpg">
      </li>
      <li>
        <img class="" src="images/somos.jpg">
      </li>
      <li>
        <img class="" src="images/somos.jpg">
      </li>
    </ul>

<a class="waves-effect waves-light btn" onclick="previus()">Atras</a>
<a class="waves-effect waves-light btn" onclick="next()">Siguiente</a>
  </div>
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
    <script type="text/javascript">
    var options = [
    {selector: '#vinculos', offset: 350, callback: 'Materialize.showStaggeredList("#vinculos")' },
    {selector: '#vinculos2', offset: 300, callback: 'Materialize.showStaggeredList("#vinculos2")' },
    ];
    Materialize.scrollFire(options);
    </script>
    
      <script src="jquery-1.11.1.min.js"></script>
      <script src="jquery.ui.effect.min.js"></script>
      <script src="jquery.ui.effect-fade.min.js"></script>
      <script src="wb.slideshow.min.js"></script>

    <script>
    $(document).ready(function()
    {
       $("#SlideShow1").slideshow(
       {
          interval: 1000,
          type: 'sequence',
          effect: 'fade',
          direction: '',
          pagination: false,
          effectlength: 1000
       });
    });
    </script>
 </body>
</html>