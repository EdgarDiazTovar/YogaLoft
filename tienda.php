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
  <link rel="stylesheet" href="css/tienda_style.css">
  <link rel="stylesheet" href="css/animate.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/slider_js.js"></script>


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
        <div class="btn_menu">Inicio</div>
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
        <div  class="btn_menu" id="menu_1">Tienda</div>
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
          <a href="tienda.php"><li>Tienda</li></a>
          <a href=""><li>Tienda</li></a>
          <a href="#"><li>Mi bolsa</li></a>
        </ul>
      </div>
    </nav>
  </div>
  <div class="cabecera">
    <!-- Tiene la imagen de la cabecera -->
  </div>
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
  <div class="logo_cabecera">
    <!-- Tiene la imagen Nuestros productos -->
  </div>
  <div class="titulo_cabecera">
    <!-- Tiene la imagen Nuestros productos -->
  </div>
  <div class="tiendaPC">
    <div class="contenedorProducto1 ratio2-1">
      <div class="prodImgIzquierda">
        <img class="img_producto"  src="img/productos/trapecio.jpg">
      </div>
      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Trapecio Kit</p>
          <p class="leyendaProducto">Dos juegos de asas cortas medianas y largas, un asiento, mosquetones y tiras de suspensión</p>
        </div>
        <div class="tipoColor">Color<br>
          <!-- Seccion de los colores -->
          <ul id="coloresProducto">
            <li class="color Rosa p1 default" id="pink" onclick="ColorSeleccionado('p1','pink','rosa','producto1')" ></li>
            <li class="color Azul p1" id="blue" onclick="ColorSeleccionado('p1','blue','azul','producto1')" ></li>
            <li class="color Morado p1" id="purple" onclick="ColorSeleccionado('p1','purple','morado','producto1')" ></li>
            <li class="color Verde p1" id="green" onclick="ColorSeleccionado('p1','green','verdegris','producto1')" ></li>
          </ul>

        </div>
        <div class="talla"></div>
        <div class="precioProducto">
          <div class="precio">Precio $2000.00</div>
          <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
        </div>
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto1" src="img/productos/trapeciorosa.jpg">
      </div>
    </div>

  </div>

  <!-- A partir de este div se muestra solo en Movil para reorganizar los productos -->
  <div class="tiendaMovil">
  </div>
  <footer class="footer">
    © Derechos reservados Ananá 2019
  </footer>


  <!-- Selecciona un color de cada producto por default con la clase default -->
  <script type="text/javascript">
    $( document ).ready(function() {
     var items = document.getElementsByClassName("default");
     for (i = 0; i < items.length; i++) {
      document.getElementById(items[i].id).style.border = "1px solid #000";
    }
  });
</script>

<!-- Genera borde al color seleccionado del producto -->
<script type="text/javascript">
  function ColorSeleccionado(padre,color,imagenColor,productoSeleccionado)
  {
    var items = document.getElementsByClassName(padre);
    for (i = 0; i < items.length; i++) {
      document.getElementById(items[i].id).style.border = "none";
    }
    document.getElementById(color).style.border = "1px solid #000";
    var image = document.getElementById(productoSeleccionado);
   image.src = "img/productos/trapecio"+imagenColor+".jpg";
  }
  // console.log(imagenColor);
   
</script>
</body>
</html>