<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/main.js">

    </script>
    <!-- <link rel="shortcut icon" href="image/png" href="img/favicon.png"> -->

    <title>Flisol 2019</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>

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
