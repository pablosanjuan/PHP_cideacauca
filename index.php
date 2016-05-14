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

<body onload="initialize()">
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
<!-- ................   NAVIGATION BAR   ........................-->
<nav class="be-black z-depth-3" >
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
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</div>
</nav>
<!-- ................   SLIDER   ........................-->
<div class="slider" style="background:#fff; z-index: -1" id="id-slider" z>
    <ul class="slides">
  <?php
    include_once("models/Datasource.php");
    include_once("models/BannerDao.php");
    include_once("models/Banner.php");
    include_once("models/Variables.php");
    $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
    $bnndao=new BannerDao();
    $banner=$bnndao->loadAll($conn);
        for($i=0;$i<count($banner);$i++)
        {
    ?>
      <li>
        <img src="<?php echo($banner[$i]->getRuta()) ?>">
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    <?php
      }
    ?>
    </ul>
  </div>
  <br>
  <div class="container divider"></div>
  <br>
<!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
<!-- ................   redecam ........................-->
  <div class="row container">
    <div class="col s12 m4 offset-m2">
    <img src="images/redecam/images/redecam.png" alt="RedeCam" class="responsive-img">
    </div>
    <div class="col s12 m8">
    <center>
    <h6 class="redecam">aqui algo que hable sobre redecam</h6>
    <br>
      <a class="waves-effect waves-light btn" href="redecam.php"><i class="material-icons right">forward</i>Ingresar</a>
    </center>
    </div>
  </div>
<!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
<!-- ..........social.......... -->
<div class="be-light-grey" style="padding-bottom: 10px">
<div class="container row">
      <h1 class="col s12 titulo1 center-align">CIDEA Social</h1>
      <!-- ..........columna facebbok.......... -->
      <div class="col s12 m5" style="margin-top:20px;">
        <center>
          <div class="cabecera-facebook text-center">Facebook</div>
        </center>
        <div class="fb-page" data-href="https://www.facebook.com/CideaCauca/?fref=ts" data-width="1000px" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DSTecOnLine/?fref=ts"><a href="https://www.facebook.com/DSTecOnLine/?fref=ts">DSTec</a></blockquote></div></div>
      </div>
      <!-- ..........columna youtube.......... -->
      <div class="col s12 m7" style="margin-top:20px;">
        <center>
          <div class="cabecera-youtube text-center">Youtube</div>
        </center>
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
        <div class="video-container">
        <iframe width="auto" height="650" src="<?php echo($urlinicio->getUrl());?>" allowfullscreen></iframe>
        </div>
      </div>
</div>
</div>
<!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
 <!-- ................   Enlaces Patrocinados   ........................-->
<div class="row ">
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
      <div class="col l3 m3 s6" style="margin-top:20px;">
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
          <h6 class="contenido-informativo"><i class="tiny material-icons">contact_phone</i><?php echo('  '.$fijo->getDescripcion());?></h6>
          <h6 class="contenido-informativo"><i class="tiny material-icons">phonelink_ring</i><?php echo('  '.$celular->getDescripcion());?></h6>
          <h6 class="contenido-informativo"><i class="tiny material-icons">comment</i><?php echo('  '.$correo->getDescripcion());?></h6>
          <h6 class="contenido-informativo"><i class="tiny material-icons">person_pin</i><?php echo('  '.$direccion->getDescripcion());?></h6>
          <h6 class="contenido-informativo"><i class="tiny material-icons">location_on</i> Popayan - Cauca</h6>
      </div>
      <div class="col l3 m3 s6" style="margin-top:20px;">
        <h5 class="titulo-informativo">Redes Sociales</h5>
          <a style="margin:5px" class="valign-wrapper" href="http://www.facebook.com/CideaCauca/" target="_blank"><span class="valign" ><img class="valign" width="60%" src="images/facebook.png"></span> Facebook</a>
          <a style="margin:5px" class="valign-wrapper" href="http://www.facebook.com/CideaCauca/" target="_blank"><span><img class="valign" width="70%" src="images/twitter.png"></span> Twitter</a>
          <a style="margin:5px" class="valign-wrapper" href="https://www.youtube.com/channel/UCGRpTPDYmTILxLHdQ1WM3sg" target="_blank"><span><img class="valign" width="70%" src="images/youtube.png"></span> Youtube</a>
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
    $(document).ready(function(){
      $('.barra').pushpin({ top: $('.barra').offset().top });
    });
    </script>
 </body>
</html>