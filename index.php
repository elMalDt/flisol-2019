<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="js/main.js">

    </script>
    <!-- <link rel="shortcut icon" href="image/png" href="img/favicon.png"> -->

    <title>Flisol 2019</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>

    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

      <label for="navi-toggle" class="navigation__button">
          <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp;</div>

      <nav class="navigation__nav">
          <ul class="navigation__list">
              <li class="navigation__item"><a href="#" class="navigation__link"><i class="far fa-user-circle circ"></i></a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">Inicio</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">¿què es flisol?</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">conferencias</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">talleres</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">apps</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">organizadores</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">desarrolladores</a></li>
              <li class="navigation__item"><a href="#" class="navigation__link">inicar sesiòn</a></li>

              </ul>
      </nav>
    </div>


    <header class="header">
      <div class="back-black"></div>
      <div class="logo-box">
        <a href="index.php"> <img src="img/flisol.png" alt="Logo" class="logo"> </a>
      </div>

      <div class="text-box">
        <h1 class="heading-primary">
          <div class="content">
             <div class="random">
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
             </div>
          </div>
        </h1>

        <a href="#" class="bot bot-white bot-animated">¡Registrate Gratis!</a>
      </div>
    </header>

    <span class="que-es-flisol">
      <h1>¿Flisol?, ¿Qué clase de <br /> meme es ese?</h1>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book.
      </p>
    </span>

    <h1>conferencias</h1>

    <div class="card-cont">


        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p>MIERCOLES</p>
              <p>10:00AM - 11:00AM</p>
            </span>
            <h2>Migrando mi hogar a Linux</h2>
            <p>Psonente: Susana María Valdivé Lunar <br> Lugar: SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p>
              A través de mi experiencia invitar a los profesionales o
              estudiantes de diseño gráfico y carreras afines a utilizar
              el software libre.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p>MIERCOLES</p>
              <p>10:00AM - 11:00AM</p>
            </span>
            <h2>Migrando mi hogar a Linux</h2>
            <p>Psonente: Susana María Valdivé Lunar <br> Lugar: SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p>
              A través de mi experiencia invitar a los profesionales o
              estudiantes de diseño gráfico y carreras afines a utilizar
              el software libre.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p>MIERCOLES</p>
              <p>10:00AM - 11:00AM</p>
            </span>
            <h2>Migrando mi hogar a Linux</h2>
            <p>Psonente: Susana María Valdivé Lunar <br> Lugar: SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p>
              A través de mi experiencia invitar a los profesionales o
              estudiantes de diseño gráfico y carreras afines a utilizar
              el software libre.
            </p>
          </div>
        </div>

  </div>

    <script type="text/javascript">

     $(document).ready(function() {

     var $randomnbr = $('.nbr');
     var $timer = 25;
     var $it;
     var $data = 0;
     var index;
     var change;
     var letters = ["F", "l", "i", "s", "o", "l", "-", "2", "0", "1", "9"];

     $randomnbr.each(function() {

     change = Math.round(Math.random()*100);
     $(this).attr('data-change', change);

     });

     function random() {
          return Math.round(Math.random()*9);
     };

     function select() {
          return Math.round(Math.random()*$randomnbr.length+1);
     };

     function value() {
          $('.nbr:nth-child('+select()+')').html(''+random()+'');
          $('.nbr:nth-child('+select()+')').attr('data-number', $data);
          $data++;

          $randomnbr.each(function() {
               if(parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
                    index = $('.ltr').index(this);
                    $(this).html(letters[index]);
                    $(this).removeClass('nbr');
               }
          });
     };

     $it = setInterval(value, $timer);

     });

     </script>

  </body>
</html>
