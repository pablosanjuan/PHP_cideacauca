<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/estilos.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body class="degradado" style="height: 100%;">
<center style="margin-top:50px">
  <div class="content z-depth-4 ">
    <img width="25%" src="images/cidea.png">
    <h5 class="titulo1">Iniciar Sesion de Administracion</h5>  
    <div class="row valign-wrapper">
      <form class="col s12 m4 l4 offset-m4 offset-l4" method="POST" action="controllers/autenticar_user.php">
        <div class="row">
        <center>
          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input name="username" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Usuario</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">vpn_key</i>
            <input name="pass" id="icon_telephone" type="password" class="validate">
            <label for="icon_telephone">Password</label>
          </div>
          <button class="waves-effect waves-light btn hoverable" type="submit"><i class="material-icons left">lock_open</i>Iniciar Sesion</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</center>   
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