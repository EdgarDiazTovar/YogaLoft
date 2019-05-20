<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="author" content="Yoga Loft">
  <meta name="description" content="">
  <meta name="keywords" content="Yoga, productos de yoga, yoga loft, loft, clases de yoga, yoga slp, horario de yoga">
  <meta name="robots" content="Index, Follow">
  <meta name="title" content="Yoga Loft">

  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="email=no">
  <meta name="format-detection" content="address=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:400,600,700" rel="stylesheet">
  <!-- Esstilos -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_slider.css">
  <link rel="stylesheet" href="css/style_menu_responsive.css">
  <link rel="stylesheet" href="css/animate.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/slider_js.js"></script>
  <!-- scripts y css de slider de clases -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/clases_style_slider.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#owl-example").owlCarousel({
        itemsDesktop : [1499,4],
        itemsDesktopSmall : [1199,3],
        itemsTablet : [899,2],
        itemsMobile : [599,1],
        navigation : true,
        navigationText : ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>','<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
      });

    });
  </script>
  <!-- WOW -->
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script type="text/javascript">
    var wow = new WOW(
    {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       5,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
  );
    wow.init();
  </script>
  <!-- Titulo -->
  <title>Yoga Loft</title>

</head>
<body>

  <div class="menubar">
    <div class="logo">
      <a href="index.php" ><img src="img/logoYogaloft.svg" class="imglogo"></a>
    </div>
    <div class="menuoptions">
      <a href="index.php">
        <div class="btn_menu" id="menu_1">Inicio</div>
      </a>
      <a href="studio.php">
        <div  class="btn_menu">Studio</div>
      </a>
      <a href="studio.php#clases">
        <div  class="btn_menu">Clases</div>
      </a>
      <div  class="btn_menu">Contacto</div>
      <a href="eventos.php">
        <div  class="btn_menu">Eventos</div>
      </a>
      <a href="tienda.php">
        <div  class="btn_menu">Tienda</div>
      </a>
      <div  class="btn_menu">Mi bolsa</div>
    </div>
  </div>
  <!-- Menu responsive -->
  <div class="menu_responsive">
    <a href="index.php" class="logo_responsive"><img src="img/logoYogaloft.svg" class="imglogo_responsive"></a>
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox" />
        <span style="background-color: #000;"></span>
        <span style="background-color: #000;"></span>
        <span style="background-color: #000;"></span>
        <ul id="menu">
          <a href="index.php"><li>Inicio</li></a>
          <a href="studio.php"><li>Studio</li></a>
          <a href="studio.php#clases"><li>Clases</li></a>
          <a href="#"><li>Contacto</li></a>
          <a href="eventos.php"><li>Eventos</li></a>
          <a href="tienda.php"><li>Tienda</li></a>
          <a href="#"><li>Mi bolsa</li></a>
        </ul>
      </div>
    </nav>
  </div>

<!-- ==================================== 
Contenedor Slider 
=======================================-->

<section id="slider" class="container wow fadeInUp">
  <ul class="slider-wrapper">
    <li class="current-slide">
      <img src="img/AEROYOGA_ABRIL.jpg" title="" alt="">
    </li>
    <li>
      <img src="img/EVENTOS_ABRIL.jpg" title="" alt="">
    </li>
    <li>
      <img src="img/INTROYOGA_ABRIL.jpg" title="" alt="">
    </li>
    <li>
      <img src="img/YOGAKIDS_ABRIL.jpg" title="" alt="">
    </li>
  </ul>
  <ul id="control-buttons" class="control-buttons"></ul>
</section>
<div class="logos wow fadeInUp">
  <div class="separador">
    <!-- No quitar -->
  </div>
  <div class="logoredes">
    <img src="img/logofa.svg" class="img_redes" title="" alt="">
  </div>
  <div class="logoredes">
    <img src="img/logoin.svg" class="img_redes" title="" alt="">
  </div>
  <div class="logoredes">
    <img src="img/logowa.svg" class="img_redes" title="" alt="">
  </div>
</div>
<div class="populares wow fadeInUp">
  <div class="titulo_populares">
    <p class="text_popular">POPULARES EN NUESTRA TIENDA</p> 
  </div>
  <div class="prod_popular">
    <div class="popular_interno1">
      <img src="img/lamparasal.jpg" class="img_popular" title="" alt="">
    </div>
    <div class="popular_interno2">
      <p class="titulo_popular_interno">Lamparas de sal</p>
      <p class="texto_popular">Purifican el aire a través del poder de la higrometría, es decir, que atraen a las moléculas de agua del ambiente y las absorben, y con ello las partículas extrañas que pudieran tener.</p>
    </div>
  </div>
  <div class="prod_popular">
    <div class="popular_interno1">
      <img src="img/lululemon.jpg" class="img_popular" title="" alt="">
    </div>

    <div class="popular_interno2">
      <p class="titulo_popular_interno">lululemon</p>
      <p class="texto_popular">Somos distribuidores autorizados.</p>
    </div>
  </div>
  <div class="prod_popular">
    <div class="popular_interno1">
      <img src="img/trapecio.jpg" class="img_popular" title="" alt="">
    </div>

    <div class="popular_interno2">
      <p class="titulo_popular_interno">!Monta tu trapecio en casa!</p>
      <p class="texto_popular">El Trapecio es una herramienta con una infinidad de usos terapéuticos, no pierdas la oportunidad y móntate en el columpio en casa</p>
    </div>
  </div>
</div>
<div class="seccion_studio wow fadeInUp">
  <img src="img/banner_studio.jpg" class="img_studio" title="" alt="">
  <div class="logo_studio">
    <img src="img/logo_negro.svg" class="img_logo_studio" title="" alt="">
  </div>
  <div class="texto_studio">
    <div class="texto_interno_studio1">
      ¡Somos más que un lugar para tomar clases,somos una comunidad y el estudio nuestro hogar!
      <p class="remarca"><b>¡AGENDA TU CLASE MUESTRA GRATIS!</b></p>
    </div>
    <div class="texto_interno_studio2">
      <a href="">
        SABER MÁS
      </a>
    </div>
    <div class="texto_interno_studio3">
      <img src="img/logowa.svg" class="wa_studio" title="" alt="">
      <div class="dudas_studio"><a href="">¿Dudas?<br>Envíanos un mensaje</a></div>
    </div>
  </div>
</div>
<div class="seccion_clases wow fadeInUp">
  <div class="titulo_clases">
    <img src="img/clases.svg" class="img_clases_titulo" title="" alt="">
  </div>
  <div id="owl-example" class="owl-carousel">
    <div class="divyogui"><img src="img/libre.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color:#6FC8B7" class="cantidad_clases">1 Clase</p>
        <p style="color:#6FC8B7" class="costo_clase">$150</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
    <div class="divyogui"><img src="img/aerolibre.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color: #6FC8B7;"class="cantidad_clases">1 Clase</p>
        <p style="color: #6FC8B7;"class="costo_clase">$180</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
    <div class="divyogui"><img src="img/inicial.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color: #478188;" class="cantidad_clases">8 Clases</p>
        <p style="color: #478188" class="costo_clase">$850</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
    <div class="divyogui"><img src="img/dedicado.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color:#bd63b0;" class="cantidad_clases">12 Clases</p>
        <p style="color:#bd63b0;" class="costo_clase">$1000</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
    <div class="divyogui"><img src="img/comprometido.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color:#86537c; "class="cantidad_clases">20 Clases</p>
        <p style="color:#86537c; "class="costo_clase">$1,150</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
    <div class="divyogui"><img src="img/cumplido.jpg" class="imgyogui" alt="">
      <div class="div_texto_clases">
        <p style="color:#00c9a5;" class="cantidad_clases">Clases ilimitadas</p>
        <p style="color:#00c9a5;" class="costo_clase">$1,450</p>
        <p style="color: #B6B6BB;"class="clase_descripcion">*Inscripciòn anual $500<br>**No incluye clases oficiales o talleres</p>
      </div>
    </div>
  </div>
</div>
<div class="utlimo_bloque wow fadeInUp" >
  <div class="titulo_ultimobloque">
    <p class="ultimo_titulo">ESTAMOS EN INSTAGRAM</p>
    <a href="https://www.instagram.com/yogaloft.ver/?hl=es-la"><p class="ultimo_subtitulo"><i>yogaloft.ver</i></p></a>
  </div>
  <div class="insta_normal wow fadeInUp">
    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/18317e43cf455caf932ac6b9b0d93694.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="margin-left:1.5%; width:97%;border:0;overflow:hidden;"></iframe>
  </div>
  <!-- Responsive -->
  <div class="insta_responsive wow fadeInUp">
    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/7bfe15ca4e595e87a470bbc22cc8a3d1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
  </div>
</div>
<footer class="footer">
 © Derechos reservados Ananá 2019
</footer>
</body>
</html>