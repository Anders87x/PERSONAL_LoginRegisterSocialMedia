<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:url" content="http://themepixels.me/bracket">
  <meta property="og:title" content="Bracket">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">
  <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="public/css/bracket.css" rel="stylesheet">
  <title>Registrate</title>
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Registrate <span
          class="tx-normal">]</span></div>
      <div class="tx-center mg-b-60">Ingrese usuario y contraseña</div>

      <div class="form-group">
        <input type="text" id="usu_nom" name="usu_nom" class="form-control" placeholder="Ingrese Nombre y Apellido">
      </div>
      <div class="form-group">
        <input type="email" id="usu_correo" name="usu_correo" class="form-control" placeholder="Ingrese Correo Electronico">
      </div>
      <div class="form-group">
        <input type="password" id="usu_pass" name="usu_pass"class="form-control" placeholder="Ingrese Contraseña">
      </div>
      <div class="form-group">
        <input type="password" id="usu_pass1" name="usu_pass1"class="form-control" placeholder="Confirmar Contraseña">
      </div>
      <button type="submit" id="btnregistrar" class="btn btn-info btn-block">Registrarse</button>

      <br>
      <a href="#" class="btn btn-primary btn-block btn-with-icon" id="btnloginf">
        <div class="ht-40">
          <span class="icon wd-40"><i class="fa fa-facebook"></i></span>
          <span class="pd-x-15">Register with Facebook</span>
        </div>
      </a>
      <a href="#" class="btn btn-danger btn-block btn-with-icon" id="btnloging">
        <div class="ht-40">
          <span class="icon wd-40"><i class="fa fa-google-plus"></i></span>
          <span class="pd-x-15">Register with Gmail</span>
        </div>
      </a>
      <a href="#" class="btn btn-dark btn-block btn-with-icon" id="btnloginh">
        <div class="ht-40">
          <span class="icon wd-40"><i class="fa fa-github"></i></span>
          <span class="pd-x-15">Register with Github</span>
        </div>
      </a>

      <div class="mg-t-60 tx-center">¿ya tienes cuenta? <a href="index.php" class="tx-info">Acceso</a></div>
    </div>
  </div>

  <script src="public/lib/jquery/jquery.js"></script>
  <script src="public/lib/popper.js/popper.js"></script>
  <script src="public/lib/bootstrap/bootstrap.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

  <script src="register.js"></script>
</body>

</html>