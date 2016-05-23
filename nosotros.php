<!DOCTYPE htm3>
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

<body onload="initialize(), Materialize.showStaggeredList('#opciones-nav'), Materialize.fadeInImage('#fade-inicial'), Materialize.fadeInImage('#fade-inicial2')">
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
  <!--...........CONTENIDO............-->
  <?php        
    include_once("models/Datasource.php");
    include_once("models/InstitucionalDao.php");
    include_once("models/Institucional.php");
    include_once("models/Variables.php");
    $conn=new Datasource($dbhost,$dbName,$dbUser,$dbPassword);  
    $instsdao=new  InstitucionalDao();
    $somos=$instsdao->getObject($conn,1);
    $mision=$instsdao->getObject($conn,2);
    $vision=$instsdao->getObject($conn,3);
  ?>
  <div class="row container">
    <h1 class="contenido1 col s12 m12 l12 titulonosotros">CIDEA Cauca : Comité Técnico Interinstitucional de Educación  Ambiental del Departamento del Cauca</h1>
  </div>
  <!-- ................   somos ........................-->
  <h1 class="titulosub center-align container col s12 m12 l12" id="fade-inicial" style="opacity:0;">Quienes Somos</h1>
  <div class="row container valign-wrapper" style="padding-top:20px">
    <img src="images/somos.jpg" class="col s12 m12 l6 hide-on-small-only responsive-img valign row" id="fade-inicial2" style="opacity:0;">
    <div class="col l1"></div>
    <div class="row col s12 m12 l5">
      <p class="centrartext contenido4" style="opacity:0,5;" id="fade-inicial"><?php echo($somos->getContenido());?></p>
    </div>
  </div>
  <!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
  <!-- ................   mision ........................-->
    <h1 class="titulosub center-align row container col s12 m12 l12" id="fade2-tit" style="opacity:0; padding-top:20px">Misión</h1>
  <div class="row container valign-wrapper" style="padding-top:20px">
    <div class="row col s12 m12 l4">
      <p class="centrartext"><?php echo($mision->getContenido());?></p>
    </div>
    <div class="col l2"></div>
    <img src="images/mision.jpg" class="col s12 m12 l6 hide-on-small-only responsive-img  valign" id="fade2" style="opacity:0;">
  </div>
  <!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
  <!-- ................   vision ........................-->
  <h1 class="titulosub center-align row container col s12 m12 l4" id="fade3-tit" style="opacity:0;padding-top:20px">Visión</h1>
  <div class="row container valign-wrapper" style="padding-top:20px">
    <img src="images/vision.jpg" class="col s12 m12 l6 hide-on-small-only responsive-img  valign" id="fade3" style="opacity:0;">
    <div class="col l2"></div>
    <div class="row col s12 m12 l4">
      <p class="centrartext"><?php echo($vision->getContenido());?></p>
    </div>
  </div>
  <!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
  <!--...........VIDEO PRESENTACION............-->
<div class="row container" style="padding-top:40px">
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
  <div class="video-container col l12 row offset-s6 video">
    <iframe id="player" class="youtube-player" src="<?php echo($urlnosotros->getUrl()); ?>" frameborder="1" allowfullscreen></iframe>
  </div>
</div>
<!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
<!--...........FUNCIONES............-->
  <div class="row container">
    <h1 class="titulosub col s12 m12 l12 centrartext" id="fade-func" style="opacity:0;">Funciones</h1>
    <ul class="col s12 m6 l6">
      <li><p class="centrartext">1. Aunar esfuerzos conceptuales, metodológicos, técnicos, financieros y de proyección, entre las diferentes instituciones con competencia y responsabilidad en el área de la Educación Ambiental, con el fin de propiciar estrategias, acciones y espacios para la formación de seres críticos, reflexivos y comprometidos con el desarrollo ambiental sostenible de la región.</p></li>
      <li><p class="centrartext">2. Asesorar, acompañar y  apoyar la construcción del  Plan de Educación Ambiental con enfoque diferencial para el Departamento,  así como direccionar  y hacer seguimiento a su implementación. </p></li>
      <li><p class="centrartext">3. Promover e incentivar los procesos investigativos en el campo educativo ambiental, y la sistematización de experiencias en el tema, para reconocer características particulares, avances, dificultades y proyecciones en el tema </p></li>
      <li><p class="centrartext"> 4. Apoyar el diseño e implementación de planes programas y actividades de comunicación y divulgación que promuevan procesos de educación ambiental. </p></li>
    </ul>

    <ul class="col s12 m6 l6">
      <li><p class="centrartext">5. Asesorar la definición de políticas, planes y programas para la Incorporación de la educación ambienta en los instrumentos de planificación del orden Departamental y Municipal.</p></li>
      <li><p class="centrartext">6. Fortalecer la coordinación interdisciplinaria e interinstitucional para la gestión educativa ambiental en el Departamento.</p></li>
      <li><p class="centrartext">7. Fortalecer la descentralización de la educación ambiental en el Departamento a través del acompañamiento a la gestión de los Comités Municipales de Educación Ambiental (CIDEAM).</p></li>
      <li><p class="centrartext">8. Impulsar, asesorar, y apoyar los proyectos ambientales escolares – PRAES, los proyectos ciudadanos de educación ambiental – PROCEDAS y los proyectos Universitarios Ambientales-PRAU en sus propuestas de formación, investigación, trabajos interdisciplinarios, de proyección comunitaria y comunicación e información.</p></li>
    </ul>
  </div>
  <!-- ................   imagen parallax ........................-->
  <div class="parallax-container hide-on-med-and-down">
    <div class="parallax"><img src="images/somos.jpg"></div>
  </div>
  <!-- ................   Integrantes ........................-->
  <div class="row container">
    <h1 class="titulosub col s12 m12 l12 centrartext" id="fade-integ" style="opacity:0;">Integrantes</h1>
      <p class="centrartext">
        <ul class="col s12 m6 l6" >
          <li class="integrantes centrartext">Gobernador del Departamento o su delegado</li>
          <li class="integrantes centrartext">Corporación  Autónoma Regional del Cauca CRC</li>
          <li class="integrantes centrartext">Secretaria de Educación y Cultura del Departamento</li>
          <li class="integrantes centrartext">Secretaría de Desarrollo Agropecuario y fomento económico</li>
          <li class="integrantes centrartext">Secretaria de Educación Municipal de Popayán</li>
          <li class="integrantes centrartext">REDEPRAES del Cauca</li>
          <li class="integrantes centrartext">Asociación de Ingenieros Ambientales del Cauca</li>
          <li class="integrantes centrartext">Las Universidades Púbicas</li>
          <li class="integrantes centrartext">Grupos de investigación del Cauca adscritos a Colciencias</li>
          <li class="integrantes centrartext">Organizaciones No  Gubernamentales Ambientales (ONG)</li>
          <li class="integrantes centrartext">Consejo Departamental para la Gestión de Riesgo</li>
        </ul>
        <ul class="col s12 m6 l6">
          
          <li class="integrantes centrartext">Consejo Regional indígena del Cauca</li>
          <li class="integrantes centrartext">Comunidades afrocolombianas  asentadas en el Departamento</li>
          <li class="integrantes centrartext">Servicio Nacional de Aprendizaje SENA</li>
          <li class="integrantes centrartext">Universidades privadas del Departamento</li>
          <li class="integrantes centrartext">Empresa Caucana de Servicios Públicos</li>
          <li class="integrantes centrartext">Policía Nacional, a través de la policía Ambiental</li>
          <li class="integrantes centrartext">Federación Departamental de Juntas acción comunal del Cauca FEDECOMUNAL</li>
          <li class="integrantes centrartext">Asociación de Juntas de Acción Comunal de Popayán Asocomunal</li>
          <li class="integrantes centrartext">Representante de Parque Nacionales</li>
        </ul>
      </p>
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
    {selector: '#fade2-tit', offset: 200, callback: 'Materialize.fadeInImage("#fade2-tit")' },
    {selector: '#fade2', offset: 200, callback: 'Materialize.fadeInImage("#fade2")' },
    {selector: '#fade3', offset: 200, callback: 'Materialize.fadeInImage("#fade3")' },
    {selector: '#fade3-tit', offset: 300, callback: 'Materialize.fadeInImage("#fade3-tit")' },
    {selector: '#fade-func', offset: 300, callback: 'Materialize.fadeInImage("#fade-func")' },
    {selector: '#fade-integ', offset: 200, callback: 'Materialize.fadeInImage("#fade-integ")' },
    ];
    Materialize.scrollFire(options);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            events: {
                'onReady': onPlayerReady
            }
        });
    }
    function onPlayerReady(event) {
        player.mute();
        player.playVideo();
    }
    </script>
 </body>
</html>