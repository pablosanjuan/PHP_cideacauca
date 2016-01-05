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
      <meta property="og:image" content="http://cideacauca.com.co/images/CIDEA.png" />
      <meta property="og:description" content="CIDEA Cauca. Comité Técnico Interinstitucional de Eduación Ambiental" />
      <meta itemprop="name" content="CIDEA Cauca">
      <meta itemprop="description" content="Yo ya estoy jugando Carrera Política y tu?">
      <meta itemprop="image" content="http://cideacauca.com.co/images/CIDEA.png">
      <meta name="twitter:image" content="http://cideacauca.com.co/images/CIDEA.png">
      <!--..........FavIcons............-->
      <link rel="icon" type="image/ico" sizes="16x16" href="http://cideacauca.com.co/images/favicon/favicon16.png">
      <link rel="icon" type="image/ico" sizes="32x32" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="48x48" href="http://cideacauca.com.co/images/favicon/favicon32.png">
      <link rel="icon" type="image/ico" sizes="64x64" href="http://cideacauca.com.co/images/favicon/favicon64.png">
      <link rel="icon" type="image/ico" sizes="128x128" href="http://cideacauca.com.co/images/favicon/favicon128.png">
      
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
<!-- ................   NAVIGATION BAR   ........................-->
  <nav id="barra-nav" class="navbar-fixed" style="margin-bottom:10px;">
    <div class="nav-wrapper be-black z-depth-4">
      <a href="index.html" class="hide-on-med-and-down brand-logo"><img src="images/cidea.png" width="50%"></a>
      <a href="index.html" class="hide-on-large-only brand-logo hidden"><img src="images/cidea_movil.png" width="50%"></a>
      <a href="index.hmtl" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" id="opciones-nav">
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="index.php">Inicio</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav  active-nav" href="nosotros.php">Nosotros</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="documentos.php">Documentos</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="experiencias.php">Experiencias</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="redecam.php">Redecam</a></li>
        <li class="divider-vertical-second-menu"></li><li><a class="animation-nav" href="contacto.php">Contacto</a></li>
      </ul>
      <!-- ................  MOBILE NAVIGATION BAR   ........................-->
      <ul class="side-nav" id="mobile-demo">
        <li class="titulo2">Menu Cidea</li>
        <li><a class="mobile-item-nav contenido1" href="index.php" value="hola">Inicio</a></li>
        <li><a class="mobile-item-nav contenido1" href="nosotros.php">Nosotros</a></li>
        <li><a class="mobile-item-nav contenido1" href="documentos.php">Documentos</a></li>
        <li><a class="mobile-item-nav contenido1" href="experiencias.php">Experiencias</a></li>
        <li><a class="mobile-item-nav contenido1" href="redecam.php">Redecam</a></li>
        <li><a class="mobile-item-nav contenido1" href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
<!-- ................   FLOATING BUTTOM   ........................-->
<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large">
    <i class="material-icons">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating tooltipped" data-position="left" data-delay="10" data-tooltip="Inicio" alt="Nosotros" href="index.php"><i class="material-icons">store</i></a></li>
    <li><a class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Nosotros" alt="Nosotros" href="nosotros.php"><i class="material-icons">supervisor_account</i></a></li>
    <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="10" data-tooltip="Documentos" alt="Documentos" href="documentos.php"><i class="material-icons">description</i></a></li>
    <li><a class="btn-floating purple darken-3 tooltipped" data-position="left" data-delay="10" data-tooltip="Experiencias" alt="Experiencias" href="experiencias.php"><i class="material-icons">loyalty</i></a></li>
    <li><a class="btn-floating green tooltipped" data-position="left" data-delay="10" data-tooltip="Redecam" alt="Redecam" href="redecam.php"><i class="material-icons">brightness_5</i></a></li>
    <li><a class="btn-floating red accent-3 tooltipped" data-position="left" data-delay="10" data-tooltip="Contacto" alt="Contacto" href="contacto.php"><i class="material-icons">contact_phone</i></a></li>
  </ul>
</div>
  <!--...........CONTENIDO............-->
  <div class="row container">
    </br></br>
    <h1 class="contenido1  col s12 m12 l12 titulonosotros">CIDEA Cauca : Comité Técnico Interinstitucional de Educación  Ambiental del Departamento del Cauca</h1>
    <h1 class="titulosub col s12 m12 l12 centrartext">Quienes Somos</h1>
     <p class="centrartext">Conformado desde el año 2004 y oficializado mediante ordenanza No 102 del 31 de Juilio de 2014 por la Asamblea Departamental del Cauca , el cominte técnico interinstitucional de educación ambiental del Cauca  se conforma como  la maxima instancia de articulación y dirección de la Educación ambiental  del Departamento, cuyo objeto es el direccionamiento de Politicas, Planes, Programas y proyectos de educación ambiental, asi como  orientar a instituciones públicas y privadas sobre el cumplimiento, alcance y aplicación de las disposiciones legales vigentes que en materia de Educación Ambiental expida tanto el Ministerio de Educación Nacional como el Ministerio de Ambeinte y Desarrollo sostenible, o los que hagan sus veces. </p>

    <h1 class="titulosub col s12 m12 l12 centrartext">Mision</h1>
     <p class="centrartext">Asesorar, orientar y acompañar la institucionalización de la Educación Ambiental en los sectores gubernamentales, civiles y/o comunitarios a nivel formaL Y  no formal. </p>
    
    <h1 class="titulosub col s12 m12 l12 centrartext">Vision</h1>
     <p class="centrartext">Posicionar el comité técnico interinstitucional de educación ambiental del Cauca, como espacio intersectorial y de participación comunitaria  que dinamiza  la educación ambiental como estrategia para la  transformación  de la cultura ambiental.</p>

     <h1 class="titulosub col s12 m12 l12 centrartext">Funciones</h1>
  
  </div>
  
  <div class="row container">
    
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

  <div class="row container">
    
    <h1 class="titulosub col s12 m12 l12 centrartext">Integrantes</h1>
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

<!-- ................   PATROCINADORES   ........................-->
 <hr>
 <ul class="row container" style="background:#fff" id="vinculos">
      <li class="col s6 m4 l1">1</li>
      <li class="col s6 m4 l1">2</li>
      <li class="col s6 m4 l1">3</li>
      <li class="col s6 m4 l1">4</li>
      <li class="col s6 m4 l1">5</li>
      <li class="col s6 m4 l1">6</li>
      <li class="col s6 m4 l1">7</li>
      <li class="col s6 m4 l1">8</li>
      <li class="col s6 m4 l1">9</li>
      <li class="col s6 m4 l1">10</li>
      <li class="col s6 m4 l1">11</li>
      <li class="col s6 m4 l1">12</li>
</ul>
<hr>
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
    {selector: '#vinculos', offset: 350, callback: 'Materialize.showStaggeredList("#vinculos")' }
    ];
    Materialize.scrollFire(options);
    </script>
 </body>
</html>