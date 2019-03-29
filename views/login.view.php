<body>


  <div class="wrapper">

    <img src="img/back-log.jpg" class="backImg" width="200px" alt="">



    <div class="container">

      <div class="signup">Registrate</div>
      <div class="login">Iniciar Sesión</div>

       <!-- FORMULARIO DE SIGNUP -->

       <form class="signup-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

          <i class="far fa-envelope"></i>
          <input type="text" placeholder="Direccion de correo" class="input" name="correo"><br />

          <i class="far fa-user-circle"></i>
          <input type="text" placeholder="Nombre completo" class="input" name="usuario"><br />

          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Contraseña" class="input" name="password"><br />

          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Confirmar contraseña" class="input" name="password2"><br />

          <input type="submit" class="btn" value="Registrar">
       </form>


       <!-- FORMULARIO DE LOGIN -->
       <form class="login-form" action="" method="get" name="login">

          <i class="far fa-envelope"></i>
          <input type="text" placeholder="Direccion de correo" class="input" name="correo"><br />

          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Contraseña" class="input" name="password"><br />

          <input type="submit" class="btn" value="Entrar">
       </form>

    </div>
    <div class="blo">
      <a href="index.php">
        <img src="img/flisol.png" class="logo-flisol" alt="">
      </a>
    </div>
  </div>


</body>
