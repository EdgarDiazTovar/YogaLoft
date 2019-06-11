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

  <!-- Para funcion de radiobutton -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
    <!-- Producto 1 -->
    <div class="contenedorProducto1 contenedorProducto ratio2-1">
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
            <li class="color Rosa p1 default" id="pink" onclick="ColorSeleccionado('p1','pink','trapecio','rosa','producto1')" ></li>
            <li class="color Azul p1" id="blue" onclick="ColorSeleccionado('p1','blue','trapecio','azul','producto1')" ></li>
            <li class="color Morado p1" id="purple" onclick="ColorSeleccionado('p1','purple','trapecio','morado','producto1')" ></li>
            <li class="color Verde p1" id="green" onclick="ColorSeleccionado('p1','green','trapecio','verdegris','producto1')" ></li>
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

    <!-- Producto 2 -->
    <div class="contenedorProducto2 contenedorProducto ratio2-1">

      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Lululemon mats 5 mm y 3mm</p>
          <p class="leyendaProducto">Toalla Marca GAIAM con pestañas en las esquinas para fijarse al Mat y tener un mejor agarre 26" X 70" Hechas de polyester y polyamide</p>
        </div>
        <div class="tipoColor">Color<br>
          <!-- Seccion de los colores -->
          <ul id="coloresProducto">
            <li class="color Azul p2 default" id="blue" onclick="ColorSeleccionado('p2','blue','lululemon','azul','producto2')" ></li>
            <li class="color Rosa p2" id="pink" onclick="ColorSeleccionado('p2','pink','lululemon','rosa','producto2')" ></li>
            <li class="color Verde p2" id="green" onclick="ColorSeleccionado('p2','green','lululemon','verde','producto2')" ></li>
            <li class="color Negro p2" id="black" onclick="ColorSeleccionado('p2','black','lululemon','negro','producto2')" ></li>
          </ul>

        </div>
        <div class="talla">
          <div class="tallaTxt" id="t1">5 MM</div>
          <div class="tallaTxt" id="t2">3 MM</div>
        </div>
        <div class="precioProducto">
          <div class="precio">Precio $2000.00</div>
          <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
        </div>
      </div>
      <div class="prodImgCentro">
        <img class="img_producto"  src="img/productos/lululemon.jpg">
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto2" src="img/productos/lululemonazul.jpg">
      </div>
    </div>

    <!-- Producto 3 -->
    <div class="contenedorProducto3 contenedorProducto ratio2-1">
      <div class="prodImgIzquierda">
        <img class="img_producto"  src="img/productos/lamparasal.jpg">
      </div>
      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Lámpara de sal</p>
          <p class="leyendaProducto">Purifican el aire a través del poder de la higrometría, es decir, que atraen a las moléculas de agua del ambiente y las absorben, y con ello las partículas extrañas que pudieran tener.</p>
        </div>
        <form method="post" action="send.php">
          <div class="tipoColor">Tamaño<br>
            <!-- Seccion de los colores -->
            <div class="radio-group ">
              <div class='radio' id="btnDefault" onclick="cambiaPrecio('precioP3','500')"></div> 2Kg
              <div class='radio' onclick="cambiaPrecio('precioP3','1000')"></div> 3Kg
              <div class='radio' onclick="cambiaPrecio('precioP3','1500')"></div> 4Kg
            </div>
          </div>
          <div class="talla"></div>
          <div class="precioProducto">
            <div class="precio" id="precioP3">Precio $500</div>
            <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
          </div>
        </form>
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto1" src="img/productos/lamparasalchica.jpg">
      </div>
    </div>

    <!-- Producto 4 -->
    <div class="contenedorProducto4 contenedorProducto ratio2-1">

      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Trapecio Kit</p>
          <p class="leyendaProducto">GAIAM Un inovador soporte para nuestros yoguis, creado para sentirse como una segunda piel, completamente ergonómicos elevan la forma en que te desarrollas durante la practica "Viste tu
Mat"</p>
        </div>
        <div class="tipoColor">Color<br>
          <!-- Seccion de los colores -->
          <ul id="coloresProducto">
            <li class="color Negro p4 default" id="blue" onclick="ColorSeleccionado('p4','black','lululemon','negro','producto4')" ></li>
          </ul>

        </div>
        <div class="talla">
          <div class="tallaTxt" id="t1">CH</div>
          <div class="tallaTxt" id="t2">M</div>
        </div>
        <div class="precioProducto">
          <div class="precio">Precio $2000.00</div>
          <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
        </div>
      </div>
      <div class="prodImgCentro">
        <img class="img_producto"  src="img/productos/paws.jpg">
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto2" src="img/productos/pawsnegro.jpg">
      </div>
    </div>

    <!-- Producto 5 -->
     <div class="contenedorProducto5 contenedorProducto ratio2-1">
      <div class="prodImgIzquierda">
        <img class="img_producto"  src="img/productos/wrap.jpg">
      </div>
      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Hot & Cold Body wrap</p>
          <p class="leyendaProducto">La almohada lumbar térmica tiene un diseño rectangular, para que cubra bien toda la zona lumbar. Provista por una cinta para que la faja térmica quede ajustada en todo momento. Terapia de calor o frío.</p>
        </div>
        <div class="tipoColor">Color<br>
          <!-- Seccion de los colores -->
          <ul id="coloresProducto">
            <li class="color Gris p5 default" id="gray" onclick="ColorSeleccionado('p5','gray','trapecio','gris','producto5')" ></li>
          </ul>

        </div>
        <div class="talla"></div>
        <div class="precioProducto">
          <div class="precio">Precio $900.00</div>
          <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
        </div>
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto1" src="img/productos/wrapgris.jpg">
      </div>
    </div>

     <!-- Producto 6 -->
    <div class="contenedorProducto6 contenedorProducto ratio2-1">

      <div class="infoProducto">
        <div class="descripcion_producto">
          <p class="tituloProducto">Difusor aromaterapia USB<br>Kit de 4 aromas</p>
          <p class="leyendaProducto">El difusor de aceite esencial 100% alimentado por USB tiene una configuración rápida y fácil y es ideal para el hogar, la oficina o el automóvil. Aromas: lavanda, peppermint, tea tree y sweet orange.</p>
        </div>
        <div class="tipoColor">Color<br>
          <!-- Seccion de los colores -->
          <ul id="coloresProducto">
            <li class="color Cafe p6 default" id="brown" onclick="ColorSeleccionado('p6','brown','lululemon','cafe','producto6')" ></li>
          </ul>

        </div>
        <div class="talla">
        </div>
        <div class="precioProducto">
          <div class="precio">Precio $2000.00</div>
          <div class="btnAgrega"><button class="btnAgregar">Agregar</button></div>
        </div>
      </div>
      <div class="prodImgCentro">
        <img class="img_producto"  src="img/productos/difusor.jpg">
      </div>
      <div class="prodImgDerecha">
        <img class="img_producto" id="producto6" src="img/productos/difusorcafe.jpg">
      </div>
    </div>





  </div>

  <!-- A partir de este div se muestra solo en Movil para reorganizar los productos -->
  <div class="tiendaMovil">
  </div>
  <footer class="footer">
    © Derechos reservados Ananá 2019
  </footer>

  <!-- Script para cambiar el precio -->
  <script type="text/javascript">

    $('.radio-group .radio').click(function(){
      $(this).parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    // var val = $(this).attr('data-value');
    // //alert(val);
    // $(this).parent().find('div').val(val);
  });
    function cambiaPrecio(divId,precio)
    {
      document.getElementById(divId).innerHTML = "Precio $"+precio;

    }
  </script>
  <!-- script para elegir la talla -->
  <script type="text/javascript">
   $('.contenedorProducto4 .tallaTxt').click(function(){
    $(this).parent().find('.tallaTxt').removeClass('selectedTalla');
    $(this).addClass('selectedTalla');
  });
</script>
  <script type="text/javascript">
   $('.contenedorProducto2 .tallaTxt').click(function(){
    $(this).parent().find('.tallaTxt').removeClass('selectedTalla');
    $(this).addClass('selectedTalla');
  });
</script>


<!-- Selecciona un color de cada producto por default con la clase default -->
<script type="text/javascript">
    /////////////////////////////////////////////////
    // Esta perte del código aun está en repatación//
    /////////////////////////////////////////////////

    $( document ).ready(function() {

    });
  //    var items = document.getElementsByClassName("default");
  //    for (i = 0; i < items.length; i++) {
  //     document.getElementById(items[i].id).style.border = "1px solid #000";
  //   }
  // });

  //  var element = $('.contenedorProducto2 li').length; //obtienes el total de elementos dentro del tag ul con clase caja
  //  $( ".contenedorProducto2 li" ).each(function( index ) {
  //   var items = document.getElementsByClassName("default");
  //   for (i = 0; i < items.length; i++) {
  //     document.getElementById(items[i].id).style.border = "1px solid #000";
  //   }
  // });
</script>

<!-- Genera borde al color seleccionado del producto -->
<script type="text/javascript">
  function ColorSeleccionado(padre,color,producto,imagenColor,productoSeleccionado)
  {
    var items = document.getElementsByClassName(padre);
    for (i = 0; i < items.length; i++) {
      document.getElementById(items[i].id).style.border = "none";
    }
    // document.getElementById(color).style.border = "1px solid #000";
    var image = document.getElementById(productoSeleccionado);
    image.src = "img/productos/"+producto+imagenColor+".jpg";
  }
</script>
</body>
</html>