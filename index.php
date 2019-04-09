<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloss.css">
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
              <!-- <li class="navigation__item"><a href="#" class="navigation__link"><i class="far fa-user-circle circ"></i></a></li> -->
              <li class="navigation__item"><a href="index.php" class="navigation__link">Inicio</a></li>
              <li class="navigation__item"><a href="#que-es" class="navigation__link">¿què es flisol?</a></li>
              <li class="navigation__item"><a href="#conferencias" class="navigation__link">conferencias</a></li>
              <li class="navigation__item"><a href="#talleres" class="navigation__link">talleres</a></li>
              <li class="navigation__item"><a href="#apps" class="navigation__link">apps</a></li>
              <li class="navigation__item"><a href="#organizadores" class="navigation__link">organizadores</a></li>
              <li class="navigation__item"><a href="#desarrolladores" class="navigation__link">desarrolladores</a></li>
              <li class="navigation__item"><a href="register.php" class="navigation__link">inicar sesiòn</a></li>

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

        <a href="#" class="bot bot-white bot-animated">¡Regístrate!</a>
      </div>
    </header>

    <span id="que-es" class="que-es-flisol">
      <h1>Acerca de FLISoL</h1>
      <p>
      El FLISoL es el evento de difusión de Software Libre más grande en Latinoamérica
      y está dirigido a todo tipo de público. Se realiza desde el año 2005 y su principal objetivo es promover el uso del software libre, dando
      a conocer al público en general su filosofía, alcances, avances y desarrollo.
      </p>
    </span>

    <h1 id="conferencias">conferencias</h1>

    <div class="card-cont">

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 10:00AM - 11:00AM </strong></p>
            </span>
            <h2>Migrando mi hogar a Linux</h2>
            <p> <strong> PONENTE: </strong> <br> Susana María Valdivé Lunar <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p><strong> DESCRIPCION: </strong> <br>
              A través de mi experiencia invitar a los profesionales o
              estudiantes de diseño gráfico y carreras afines a utilizar
              el software libre.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/virt.jpeg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 11:00AM - 12:00AM </strong></p>
            </span>
            <h2>Contenedores y virtualización opensource, de bajo costo y alto rendimiento</h2>
            <p> <strong> PONENTE: </strong> <br> Raúl González <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p>
              <strong> DESCRIPCION: </strong> <br>
              Conocer herramientas opensource que permiten la realización
              de contenedores (LXC) y virtualización (KVM), que son de un
               costo menor a comparación de herramientas de licenciamiento
               pero igualmente son herramientas de alto rendimiento.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/rasp.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 12:00PM - 13:00PM </strong></p>
            </span>
            <h2>Rho-Pi: Bot de Telegram para controlar una RaspberryPi</h2>
            <p> <strong> PONENTE: </strong> <br>Rodrigo García <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p><strong> DESCRIPCION: </strong> <br>
              Mostrar una manera sencilla de controlar
               una Raspberry Pi con un Bot de Telegram
                mediante el uso de software libre.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/code.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 13:00PM - 14:00PM </strong></p>
            </span>
            <h2>Fedora containers</h2>
            <p> <strong> PONENTE: </strong> <br>Alex Callejas<br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p><strong> DESCRIPCION: </strong> <br>
              Compartir la instalación y uso de podman
               como alternativa libre a docker,
               en la administración de contenedores.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/web.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 15:00PM - 16:00PM </strong></p>
            </span>
            <h2>Creación de aplicaciones web utilizando software libre como base</h2>
            <p> <strong> PONENTE: </strong> <br>Sergio Ramos <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p><strong> DESCRIPCION: </strong> <br>
              Relatar nuestra experiencia en el desarrollo
              de productos digitales utilizando el software
              libre como piedra angular. Los asistentes conocerán
              a detalle las etapas y características que conlleva
              la creación de proyectos web a un nivel profesional.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/debiann.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> MIERCOLES </strong></p>
              <p> <strong> 16:00PM - 17:00PM </strong></p>
            </span>
            <h2>Debian y su misión con el software libre</h2>
            <p> <strong> PONENTE: </strong> <br>Diego Hernández<br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
            <p><strong> DESCRIPCION: </strong> <br>
              Dar a conocer las características del sistema
              operativo Debian, su filosofía, su  enfoque
              hacia  el  software  libre, incitar a que más
              personas lo usen y hablar de lo que se pretende
              hacer con un grupo de usuarios en México.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/compfore.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> JUEVES </strong></p>
              <p> <strong> 16:00PM a 18:00PM </strong></p>
            </span>
            <h2 style="font-size: 20px;">Informática forense con software libre: demostración de hallazgos/evidencia digital aplicable a una investigación criminal</h2>
            <p> <strong> PONENTES: </strong> <br>Alejandra Morán, Erick Tonchi<br> <br> <strong> LUGAR: </strong> <br> SALA DE USOS MÚLTIPLES DEL CENTRO DE DESARROLLO TECNOLÓGICO</p>
            <p><strong> DESCRIPCION: </strong> <br>
              Mostrar a los asistentes una demostración del
              análisis forense sobre  medios digitales
              mediante software libre “The Sleuthkit”
              y su interfaz gráfica “Autopsy”  para la emisión
              de un reporte resolutivo capaz de ser utilizado
              como un informe de “hallazgos digitales”, referido
              en una cadena de custodia legal y aspectos
              relacionados con la demostración fundamentado en
              el sistema de justicia penal mexicano vigente.
            </p>
          </div>
        </div>

        <div class="card-main-content">
          <img class="img-main-card" src="img/tarjetas-conf/bas.jpg" alt="">
          <div class="back-card"></div>
          <div class="main-card-section">
            <span>
              <p> <strong> VIERNES </strong></p>
              <p> <strong> 10:00AM - 11:00AM </strong></p>
            </span>
            <h2>Linux contra la basura electrónica</h2>
            <p> <strong> PONENTE: </strong> <br>Víctor Ruíz<br> <br> <strong> LUGAR: </strong> <br> SALA DE USOS MÚLTIPLES DEL CENTRO DE DESARROLLO TECNOLÓGICO </p>
            <p><strong> DESCRIPCION: </strong> <br>
              Dar a conocer las acciones que Silikn
              está realizando para reducir la basura
              electrónica y al mismo tiempo la brecha
              digital en una misma iniciativa.
            </p>
          </div>
        </div>

  </div>


  <div class="band-register">
    <a href="register.php">
    <div class="">
        ¡Regístrate Gratis!
    </div>
  </a>
  </div>

  <h1 id="talleres">talleres</h1>

  <div class="card-cont">

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/bash.png" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 9:00AM - 11:00 AM </strong></p>
          </span>
          <h2>Introducción a BASH scripting</h2>
          <p> <strong> IMPARTE: </strong> <br> Enrique García <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Que los asistentes conozcan los aspectos
            más básicos de BASH scripting, abordando, variables,
            parámetros posicionales y flujo de programación Conocimientos previos:
            Nociones básicas de lógica de programación, conocimiento de rutas
            y comandos para manipular archivos en GNU/Linux
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tails.png" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> Miércoles </strong></p>
            <p> <strong> 11:00 AM - 13:00 PM </strong></p>
          </span>
          <h2>Introducción a la privacidad y anonimato en Tails</h2>
          <p> <strong> IMPARTE: </strong> <br> Carlos Martínez <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
	  Aprender a usar el sistema operativo vivo Tails para ayudarnos a
	  mejorar nuestra privacidad y anonimato.
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/julia.png" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 11:00AM - 1:00 PM </strong></p>
          </span>
          <h2>Introducción a JULIA con enfoque práctico</h2>
          <p> <strong> IMPARTE: </strong> <br> Melissa Ponce <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Que los asistentes puedan conocer las principales
            herramientas del lenguaje de programación JULIA de tal
            manera que puedan tener intuición de cómo aplicarlas en
            problemas físicos, biológicos, etc. En concreto, se
            abordarán problemas de computación numérica y simulación.
            Conocimientos previos: Nociones básicas de lógica de programación
            y control de flujo (if, else, for, while).
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/r.png" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 11:00AM - 1:00 PM </strong></p>
          </span>
          <h2>R no estadístico</h2>
          <p> <strong> IMPARTE: </strong> <br> Oscar Caballero <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            El asistente aprenderá a manejar el paquete R,
            para hacer operaciones con matrices, vectores,
            encontrar derivadas de algunas funciones y los
            principios de integrales.Conocimientos previos:
            El asistente debe tener conocimientos sobre las áreas de Álgebra Lineal y Cálculo Diferencial
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/scraping.png" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 11:00AM - 1:00 PM </strong></p>
          </span>
          <h2>Web Scraping</h2>
          <p> <strong> IMPARTE: </strong> <br> Raúl González <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Que el asistente aprenda web scraping, la cual es una
            técnica para extraer información de sitios web mediante
            programas o lenguajes de programación. Conocimientos
            previos: Conocimientos en lenguaje de programación Python o Java.
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tierra.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 1:00PM - 3:00 PM </strong></p>
          </span>
          <h2>Análisis de datos espaciales con GEODA</h2>
          <p> <strong> IMPARTE: </strong> <br> Diego Galván <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Dar una introducción a los conceptos básicos de
            la estadística espacial y al software de GEODA para
            realizar análisis exploratorio de datos espaciales.
            Conocimientos previos: Nociones básicas de estadística descriptiva y computación.
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> Miércoles </strong></p>
            <p> <strong> 1:00PM - 3:00 PM </strong></p>
          </span>
          <h2>Taller básico de LaTeX</h2>
          <p> <strong> IMPARTE: </strong> <br> Víctor Vázquez <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Los participantes adquirirán la habilidad de hacer
            documentos científicos de alta calidad tipográfica
            con el fin de producirlos por si mismos.
            Conocimientos previos: Ninguno
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 1:00PM - 3:00 PM </strong></p>
          </span>
          <h2>Taller básico de Blender</h2>
          <p> <strong> IMPARTE: </strong> <br> Akzayakatl Colín y Eduardo Baliñas <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Que el asistente apenda los conceptos
            básicos de modelado 3D y termine con un
            archivo para tener su modelado en físico.
            Conocimientos previos: Ninguno
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 1:00PM - 3:00 PM </strong></p>
          </span>
          <h2>Introducción a Emacs</h2>
          <p> <strong> IMPARTE: </strong> <br> Diego Martínez <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Mostrarle a la comunidad la existencia, el uso y
            los beneficios de un editor de textos libre como Emacs,
            el cual puede ser usado desde edición de archivos de texto
            simples, hasta para la edición y escritura de código en
            diferentes lenguajes de programación. Conocimientos previos: Ninguno
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 4:00PM – 6:00 PM </strong></p>
          </span>
          <h2>Diseñando un flyer con Inkscape</h2>
          <p> <strong> IMPARTE: </strong> <br> Susana Valdivé <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Aprender a diseñar un flyer con herramientas
            libres y comparando Inkscape contra otro programa
            de vectores de código cerrado. Conocimientos previos: Nociones de diseño gráfico.
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES </strong></p>
            <p> <strong> 1:00PM - 3:00 PM </strong></p>
          </span>
          <h2>LaTeX Académico</h2>
          <p> <strong> IMPARTE: </strong> <br> Víctor Vázquez <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
	  Aplicar LaTeX para el desarrollo de productos académicos; en particular,
	  tesis, libros y brevemente artículos. El participante obtendrá los conocimientos
	  necesarios para el trabajo de archivos robustos mediante el paradigma modular,
	  creación de funciones, comandos y uso web (Moodle), entre otros.
          </p>
        </div>
      </div>

      <div class="card-main-content">
        <img class="img-main-card" src="img/tarjetas-conf/tux.jpg" alt="">
        <div class="back-card"></div>
        <div class="main-card-section">
          <span>
            <p> <strong> MIERCOLES Y JUEVES </strong></p>
            <p> <strong> 4:00PM a 6:00 PM </strong></p>
          </span>
          <h2>Laravel</h2>
          <p> <strong> IMPARTE: </strong> <br> Lizbeth Luna, Francisco Castañeda  <br> <br> <strong> LUGAR: </strong> <br> SALA DE VIDEOCONFERENCIAS DE LA UNIDAD DE INVESTIGACIÓN MULTIDISCIPLINARIA </p>
          <p><strong> OBJETIVO: </strong> <br>
            Que el asistente aprenda el uso del MVS Laravel y pueda
            realizar proyectos con dicho framework, realización de
	    una API con CRUDs para el consumo del front-end.
	Conocimientos previos: PHP básico, MySQL básico.
          </p>
        </div>
      </div>
</div>


<div class="band-register">
  <a href="register.php">
  <div class="">
      ¡Regístrate Gratis!
  </div>
</a>
</div>


  <!-- colocar cards para talleres INICIO -->
  <!-- colocar cards para talleres FIN -->

  <h1 id="apps">alternativas <br>libres al <br> software comercial </h1>

  <div class="wrapperr">
  <div class="half">
    <div class="tab">
      <input id="tab-one" type="checkbox" name="tabs">
      <label for="tab-one">Windows vs Linux</label>
      <div class="tab-content">
        <div class="">
          <img src="img/iconos-com/windows.png" alt="">
          <ul style="display: inline-block;">
            <li>
              Es el sistema operativo más popular en el mundo.
            </li>
            <li>
              Fácil manejo e instalación de dispositivos.
            </li>
            <li>
              Gran compatibilidad con hardware existente en el mercado.
            </li>
          </ul>
        </div>
        <div class="">
          <img src="img/iconos-com/linux.png" alt="">
          <ul style="display: inline-block;">
            <li>
              Es muy robusto, estable y rápido.
            </li>
            <li>
              Ideal para servidores y aplicaciones distribuidas.
            </li>
            <li>
              No está restringido a personas con grandes conocimientos <br>de informática.
            </li>
          </ul>
        </div>

      </div>
    </div>
      <div class="tab">
        <input id="tab-two" type="checkbox" name="tabs">
        <label for="tab-two">MsOffice vs LibreOffice</label>
        <div class="tab-content">
          <div class="">
            <img src="img/iconos-com/msoffice.png" alt="">
            <ul style="display: inline-block;">
              <li>
                La mayoría de las empresas lo utilizan.
              </li>
              <li>
                Es un software muy completo al realizar diversas tareas.
              </li>
              <li>
                Microsoft ofrece asistencia en linea para sus productos Office.
              </li>
            </ul>
          </div>
          <div class="">
            <img src="img/iconos-com/Libreoffice.png" alt="">
            <ul style="display: inline-block;">
              <li>
                Ciclo regular de solo dos actualizaciones anuales
              </li>
              <li>
                LibreOffice funciona en cualquier distribución de Linux, en Windows y Mac.
              </li>
              <li>
                LibreOffice se distribuye de manera gratuita.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab">
        <input id="tab-three" type="checkbox" name="tabs">
        <label for="tab-three">Photoshop vs Gimp</label>
        <div class="tab-content">
          <div class="">
            <img src="img/iconos-com/ps.png" alt="">
            <ul style="display: inline-block;">
              <li>
                Te ayuda a corregir fotos con problemas de exposición.
              </li>
              <li>
                Se utilizan para eliminar elementos que no desean incluir <br> en sus imagenes.
              </li>
              <li>
                Facilita la edición de fotos y permite ilustrar digitalmente con una gran <br> cantidad de herramientas bajo el mismo software.
              </li>
            </ul>
          </div>
          <div class="">
            <img src="img/iconos-com/gimp.png" alt="">
            <ul style="display: inline-block;">
              <li>
              Gimp y sus Plugin se pueden obtener Gratis.
              </li>
              <li>
                Esta disponible para múltiples plataformas y Sistemas Operativos.
              </li>
              <li>
                Ocupa muy poco espacio en nuestro disco duro.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab">
        <input id="tab-four" type="checkbox" name="tabs">
        <label for="tab-four">Play Store vs F-Droid</label>
        <div class="tab-content">
          <div class="">
            <img src="img/iconos-com/playstore.png" alt="">
            <ul style="display: inline-block;">
              <li>
                la gran mayoría de las apps son gratuitas.
              </li>
              <li>
                La descarga de apps es totalmente segura.
              </li>
              <li>
                 apps clasificadas por categorías de forma muy ordenada y <br>
                además puedes usar el buscador mediante palabras clave
              </li>
            </ul>
          </div>
          <div class="">
            <img src="img/iconos-com/fdroid.png" alt="">
            <ul style="display: inline-block;">
              <li>
                Es una alternativa a la Play Store.
              </li>
              <li>
                Apps con mayor privacidad y transparencia.
              </li>
              <li>
                Se pueden compartir apps por Bluetooth y sin conexion a <br>  internet.
              </li>
            </ul>
          </div>
        </div>
      </div>



      <div class="tab">
        <input id="tab-six" type="checkbox" name="tabs">
        <label for="tab-six">Adobe Premiere vs KDEnlive</label>
        <div class="tab-content">
          <div class="">
            <img src="img/iconos-com/pr.png" alt="">
            <ul style="display: inline-block;">
              <li>
                nos va a dejar importar todo tipo de formatos: jpg, gif, psd, mp3, mp4, etc.
              </li>
              <li>
                podemos importar secuencias de Adobe After Effects o la <br> sucesión de imágenes  <br> creadas por 3D Studio Max.
              </li>
              <li>
                Compatible con Mac y Windows.
              </li>
            </ul>
          </div>
          <div class="">
            <img src="img/iconos-com/enlive.png" alt="">
            <ul style="display: inline-block;">
              <li>
                ¡Es Gratis!, hermano.
              </li>
              <li>
                es capaz de manipular cualquier formato y hace que no <br>
                sea obligatorio convertir los videos antes de editarlos.
              </li>
              <li>
                Este programa es muy versátil y permite editar material de  cámaras DV, <br>HDV y AVCHD.
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>

    <h1 id="organizadores" class="org-tit">organizadores</h1>

<!-- INTRODUZCA CODIGO ORGANIZADORES INICIO -->
<div class="wrap-organizadores">

  <div class="org-person">
    <img src="img/organiz-ejemp/0.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/26.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/29.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/29.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/0.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/26.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/29.jpg" alt="">
    <p>Nombre #n</p>
  </div>

  <div class="org-person">
    <img src="img/organiz-ejemp/29.jpg" alt="">
    <p>Nombre #n</p>
  </div>

</div>


<h1 id="desarrolladores" style="margin-top:30px;">Desarrolladores CIDWA</h1>
  <div class="wrap-organizadores">
    <div class="org-person">
      <img src="img/organiz-ejemp/29.jpg" alt="">
      <div class="prof-box">
        <p>Arturo Guerrero</p>
      </div>
      <p class="prof">Project Manager</p>
    </div>
    <div class="org-person">
      <img src="img/organiz-ejemp/29.jpg" alt="">
      <div class="prof-box">
        <p>Enrique Maya</p>
      </div>
      <p class="prof">Desarrollador Web</p>
    </div>
    <div class="org-person">
      <img src="img/organiz-ejemp/29.jpg" alt="">
      <div class="prof-box">
        <p>Hugo Enriquez</p>
      </div>
      <p class="prof">Desarrollador Web</p>
    </div>
  </div>

<!-- INTRODUZCA CODIGO ORGANIZADORES FIN -->


<!-- INTRODUZCA CODIGO DESARROLLADORES INICIO -->
<!-- INTRODUZCA CODIGO DESARROLLADORES FIN -->

<footer>
  <p class="foo-cid">
    Pagina hecha con &#x1F496; por CIDWA
    para  la FES Acatlàn
  </p>

  <div class="back-itemss">
    <div class="follow-us">
      <div class="contain-follow">
        <p>siguenos en:</p>
      </div>
      <div class="icons-bocs">
        <a href="https://www.facebook.com/fes.acatlan/" style="text-decoration: none; color: #fff;">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://www.instagram.com/fes_acatlan/?hl=en" style="text-decoration: none; color: #fff;">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
    <a href="https://www.acatlan.unam.mx/">
      <img src="img/logo-acatlan.png" alt="">
    </a>
  </div>
</footer>


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
