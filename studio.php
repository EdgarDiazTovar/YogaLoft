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
  <link rel="stylesheet" href="css/style_somos.css">
  <link rel="stylesheet" href="css/style_slider.css">
  <link rel="stylesheet" href="css/style_slider_somos.css">
  <link rel="stylesheet" href="css/slider_controlado.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style_menu_responsive.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/slider_js.js"></script>
  <!-- scripts y css de slider de clases -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/clases_style_slider.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  
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
  <title>Studio</title>

</head>
<body>

  <div class="menubar">
    <div class="logo">
      <a href="index.php" ><img src="img/logoYogaloft.svg" class="imglogo"></a>
    </div>
    <div class="menuoptions">
      <a href="index.php"><div  class="btn_menu" >Inicio</div></a>
      <a href="studio.php"><div  class="btn_menu" id="menu_1">Studio</div></a>
      <a href="#clases"><div  class="btn_menu">Clases</div></a>
      <div  class="btn_menu">Contacto</div>
      <a href="eventos.php">
        <div  class="btn_menu">Eventos</div>
      </a>
      <a href="">
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
          <a href="#clases"><li>Clases</li></a>
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
    <li>
      <img src="img/studio_abril1.jpg" title="" alt="">
      <img src="img/nuestro_studio.svg" class="titulo_studio">
    </li>
    <li>
      <img src="img/studio_abril2.jpg" title="" alt="">
      <img src="img/nuestro_studio.svg" class="titulo_studio">
    </li>
    <li>
      <img src="img/studio_abril3.jpg" title="" alt="">
      <img src="img/nuestro_studio.svg" class="titulo_studio">
    </li>
  </ul>
  <ul id="control-buttons" class="control-buttons"></ul>
</section>
<div class="logos">
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
<div class="segundo_bloque_somos wow fadeInUp">
  <div class="logo_somos">
    <img src="img/logo_color.svg" class="img_logo_somos" title="" alt="">
  </div>
  <div class="descripcion_somos">


    Somos el primer estudio de yoga aéreo en Veracruz<br><br>
    El yoga aéreo o antigravity se realiza con el cuerpo en suspensión en un columpio de
    tela, esta práctica mejora la salud gracias a la corrección postural<br><br>
    En yoga loft creemos firmemente que las asanas son para todos. No importa ni tu edad,
    ni tu estado físico. Es por eso que tenemos varios estilos y niveles para todos.<br><br>
    Nuestro objetivo es inspirar y facilitar en cada nivel la confianza y fortaleza , y que te la
    lleves a casa tras enrollar tu tapete, practicar yoga es un estilo de vida que nos hace
    ser mejores personas.
  </div>
</div>
<div class="seccion3  wow fadeInUp">
  <div class="seccion3_1">
    <p clasS="seccion3_textos">
      El Yoga Trapeze es una herramienta de inversión que te permite practicar posturas de yoga aéreo. Las clases incluyen extensiones pasivas de espalda, trabajo de centro, fortalecimiento de tren superior, equilibrio y posturas invertidas. ¡Un yoga totalmente distinto y divertido!
    </p>
  </div>
  <div class="seccion3_2">
    <img src="img/studio1.jpg" class="img_seccion3" title="" alt="">
  </div>
</div>
<div class="seccion4  wow fadeInUp">
  <div class="seccion4_2"  id="img_desaparece1">
    <img src="img/studio2.jpg" class="img_seccion3" title="" alt="">
  </div>
  <div class="seccion4_1">
    <p clasS="seccion3_textos">
      !Queremos que conozcas el yoga en toda su riqueza y diversidad, de manera que cultives el balance en cuerpo, mente y alma y así ir adoptando esta filosofía de vida! Yoga proporciona fortaleza, Flexibilidad, Equilibrio, Capacidad física y mental, es experimentar un elevado nivel de conciencia, darse cuenta del cuerpo y sus señales, vivir con actitud positiva, yoga es una forma de vida.
    </p>
  </div>
  <div class="seccion4_2" id="img_desaparece">
    <img src="img/studio2.jpg" class="img_seccion3" title="" alt="">
  </div>
</div>
<div class="seccion_instructores wow fadeInUp">
  <img src="img/nuestros_instructores.svg" class="titulo_instructores" title="" alt="">
  <div class="texto_instructores">
    Somos personas dedicadas en cuerpo y alma a la práctica de yoga, viviendo día a día según los principios de esta filosofía.
  </div>
</div>
<div class="seccion_maestros wow fadeInUp">
  <div class="maestros1">
    <div class="maestros1_1">
      <img src="img/ana.jpg" class="img_maestros" title="" alt="">
      <div class="texto_maestro">
        <p class="nombre_maestro">Anna Zosimova</p>
        <p class="red_maestro">@an.zosimova.na</p>
        <p class="descripcion_maestro">Certificada en Fly Yoga en Kiev, Ukrania.<br>
          Certificada en Yoga y Hatha Yoga en Moscu, Rusia.<br>
          Bailarina y coreografa, Anna Zosimova (25 años), empezó el ballet a los 4 años. Descubrió el yoga en el 2011 y es practicante de
          Ashtanga, Vinyasa, Hatha Restaurativo y Aeroyoga. Amante de la filosofía de vida oriental, durante 3 años ha viajado a India y
        Thailandia practicando Bhakti yoga. Aprendió el español y empezó su vida en el Ashram de Veracruz.</p>
      </div>
    </div>
    <div class="maestros1_1">
     <img src="img/leslie.jpg" class="img_maestros" title="" alt="">
     <div class="texto_maestro">
      <p class="nombre_maestro">Leslie Zamudio</p>
      <p class="red_maestro">@leslie.zdio</p>
      <p class="descripcion_maestro">Certificada en Ashtanga Yoga (1ra serie) 200 RYT por Ashtanga Yoga Mexico. Desde el 2015, Leslie Zamudio (34 años), se desarrolla como instructora de yoga e imparte los estilos Hatha, Vinyasa y Ashtanga. Ama perderse en los libros y considera el conocimiento base de toda disciplina y raíz de la humildad.<br> Cuenta con estudios de Yoga para la salud y Biomecánica del Cuerpo y Anatomía del Hatha Yoga.
      </p>
    </div>
  </div>
</div>

<div clasS="margen"></div>

<div class="maestros1">
  <div class="maestros1_1">
    <img src="img/claudine.jpg" class="img_maestros" title="" alt="">
    <div class="texto_maestro">
      <p class="nombre_maestro">Claudine Remes Maasberg</p>
      <p class="red_maestro">@an.zosimova.na</p>
      <p class="descripcion_maestro">Certificada en Hatha y Ashtanga, en India Rishikesh
        Certificada en Yoga Trapeze (yoga aereo) en Barcelona, España.<br> Clodi Yogini (28 años) es un alma viajera, amante de los deportes que tengan conexión con la naturaleza, descubrió el yoga por primera vez en su lugar natal en el 2011 y cuando comenzó a viajar adoptó esta práctica diaria en Brasil en el 2014, ese mismo año se mudó a Barcelona fue donde profundizo más en esta disciplina. Es practicante de Vinyasa, Ashtanga, Dharma, aeroyoga y acroyoga.<br> Después de un viaje espiritual largo a la India y Nepal en el 2017/2018, regresó a Veracruz a abrir Yoga Loft, un lugar creado para compartir las enseñanzas del oriente combinado con esta nueva disciplina del yoga aéreo.</p>
      </div>
    </div>
    <div class="maestros1_1">
     <img src="img/marijose.jpg" class="img_maestros" title="" alt="">
     <div class="texto_maestro">
      <p class="nombre_maestro">Marijose Palmeros</p>
      <p class="red_maestro">@marip.yoga</p>
      <p class="descripcion_maestro">Marijo Palmeros es maestra certificada en el sistema VY Vinyasa Yoga, y en Rainbow Kids Yoga. Inició su camino en el yoga en el 2012, y ha tomado talleres de diversas corrientes en busca de moldear su propio estilo.<br> Actualmente sus clases para adultos son una mezcla entre hatha, vinyasa y restaurativo, con el objetivo de que cada alumno logre tener una práctica consciente e íntegra, y pueda adaptar el yoga de acuerdo a sus necesidades.<br> En sus clases de yoga para niños, quiere que los alumnos aprendan mientras se divierten, pero sobre todo que encuentren un espacio donde tenga la libertad de ser ellos mismos.
      </p>
    </div>
  </div>
</div>
</div>
<div class="tipos_yoga_titulo  wow fadeInUp"> <!-- No borrar --></div>
<!--  -->
<!--  -->
<div class="slide_tipo_yoga wow fadeInUp">
  <div class="slider_tiposyoga">
    <div class="slider">
      <div class="slide_viewer">
        <div class="slide_group">
          <div class="slide">
           <div class="slider_somos">
            <p class="titulo_slider">AEROYOGA</p>
            <p class="texto_slider">Una nueva modalidad de yoga en suspensión. Se utiliza un columpio de tela que sirve de soporte al cuerpo para poder llegar a posturas inimaginables así como ayudar a hacer espacio entre las vértebras para evitar dolores de espalda, entre muchos otros beneficios, no hace falta ser experto para practicarlo.<br><br>Nivel 2 intensidad moderada.</p>
          </div>
          <div class="img_slider_somos" id="img_somos1"></div>
        </div>
        <div class="slide">
          <div class="slider_somos">
            <p class="titulo_slider">AEROYOGA RESTAURATIVO</p>
            <p class="texto_slider">El columpio se baja más para poder realizar posturas suspendidos levemente del piso, se usa de forma terapéutica para descompensar la espalda, y hacer tracción de columna.<br><br>Nivel 1 intensidad suave.</p>
          </div>
          <div class="img_slider_somos" id="img_somos2"></div>
        </div>
        <div class="slide">
          <div class="slider_somos">
            <p class="titulo_slider">AEROKIDS</p>
            <p class="texto_slider">Combinamos el yoga de piso con posturas en el columpio suspendido. Los ejercicios se adaptan a los niños, convirtiéndolos en juegos divertidos y creativos, trabajando la psicomotricidad. Muchos niños hacen yoga, pero ¿cuántos hacen la posición del León al revés o cuántos pueden hacer volteretas suspendidos por encima del suelo?<br><br>Nivel 1 intensidad suave.</p>
          </div>
          <div class="img_slider_somos" id="img_somos3"></div>
        </div>
        <div class="slide">
          <div class="slider_somos">
            <p class="titulo_slider">HATHA</p>
            <p class="texto_slider">El significado literal en sánscrito es “fuerza”, osea que lo traducen como “el yoga de la fuerza”. A través del Hatha Yoga se aprende la respiración correcta, una práctica de posturas más pausada y profunda. Trabaja sobre todo la fuerza muscular, la flexibilidad, sirve para reducir o eliminar el estrés (sobre todo a través de la respiración), para mejorar la postura corporal y el control de nuestro cuerpo. Hatha es una buena introducción al yoga ya que es la base de los demás estilos de yoga<br><br> Nivel 1 intensidad suave.<br>Nivel 2 intensidad moderada.</p>
          </div>
          <div class="img_slider_somos" id="img_somos4"></div>
        </div>
        <div class="slide">
         <div class="slider_somos">
          <p class="titulo_slider">VINYASA</p>
          <p class="texto_slider">Vinyasa quiere decir conectar los movimientos de nuestro cuerpo con la respiración para así unir de manera fluida una postura con otra. Es una práctica dinámica y vigorosa. Se requiere de Fuerza, flexibilidad y concentración.<br><br>Nivel 1 intensidad suave.<br>Nivel 2 intensidad moderada.</p>
        </div>
        <div class="img_slider_somos" id="img_somos5"></div>
      </div>
      <div class="slide">
        <div class="slider_somos">
          <p class="titulo_slider">POWER VINYASA</p>
          <p class="texto_slider">Es un estilo de yoga vigoroso en donde los alumnos se mueven fluidamente de una postura a a la otra. Incorpora fuerza, flexibilidad, balance y cardio, así como resistencia física y mental.La diferencia de vinyasa es que se practican posturas más avanzadas e invertidas.<br><br>Nivel 2 intensidad moderada.<br>Nivel 3 requieren mayor fuerza y condición física..</p>
        </div>
        <div class="img_slider_somos" id="img_somos6"></div>
      </div>
      <div class="slide">
        <div class="slider_somos">
          <p class="titulo_slider">ASHTANGA</p>
          <p class="texto_slider">Es una secuencia ya preestablecida por el maestro Sri. Pattabi Jois. Ashtanga yoga se basa en posturas y movimientos fluidos, ligados a la respiración (estilo vinyasa) y constituye un sistema de series vigoroso y exigente que busca crear una meditación en movimiento. En términos del propio Jois, "Ashtanga purifica el cuerpo, el sistema nervioso y cultiva el campo energético adecuado en el cuerpo, pero además da a la gente una experiencia directa interna de su potencial.<br><br>Nivel 2 intensidad moderada.<br>Nivel 3 requieren mayor fuerza y condición física..</p>
        </div>
        <div class="img_slider_somos" id="img_somos7"></div>
      </div>
      <div class="slide">
        <div class="slider_somos">
          <p class="titulo_slider">YOGA BODY</p>
          <p class="texto_slider">Es un ejercicio integral que abarca todo el cuerpo, por lo que al practicarlo tendrás un entrenamiento completo. Su objetivo es aumentar la fuerza del abdomen y la espalda baja. Mejorar la postura, tonificar los músculos, aumentar la circulación y energía, mejorar la flexibilidad y quemar calorías completan los beneficios que te ofrece esta práctica.<br><br>Nivel 1 intensidad suave.<br>Nivel 2 intensidad moderada.</p>
        </div>
        <div class="img_slider_somos" id="img_somos8"></div>
      </div>
    </div>
  </div>
</div><!-- Fin de slider -->
<!-- Botones de slider -->
<div class="slide_buttons"> <!-- NO BORRAR --></div>
<div class="directional_nav">
  <div class="previous_btn" title="Previous">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
    <g>
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
      c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
    </g>
  </svg></div>
  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
      <g>
        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
      </g>
    </svg> </div>
  </div> <!-- Termina botones de slider -->
</div> <!-- Termina seccion de slider -->
</div>
<div class="calendario_titulo wow fadeInUp"></div>
<div class="horarios wow fadeInUp">
  <!-- Marcador para redireccionar a esta seccion -->
  <a name="clases" id="clases"></a>
  <!-- Inicia tabla -->
  <div class="divTable">
    <div class="divTableBody">
      <div class="divTableRow1 redondosuperior ">
        <div class="cabecera_horas" ><p class="txt_tbl">↓ Horarios</p></div>
        <div class="cabecera_inpar" id="esquina_si"><p class="txt_tbl1"><b>Lunes</b></p></div>
        <div class="cabecera_par"><p class="txt_tbl1"><b>Martes</b></p></div>
        <div class="cabecera_inpar"><p class="txt_tbl1"><b>Miercoles</b></p></div>
        <div class="cabecera_par"><p class="txt_tbl1"><b>Jueves</b></p></div>
        <div class="cabecera_inpar"><p class="txt_tbl1"><b>Viernes</b></p></div>
        <div class="cabecera_par redondodi"><p class="txt_tbl1"><b>Sabado</b></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>7:30 AM</b></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Vinyasa<p class="hora">90 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Vinyasa<p class="hora">90 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>8:00 AM</b></p></div>
        <div class="columna_dia_inpar">Yoga Aéreo<p class="hora">60 min</p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
        <div class="columna_dia_inpar">Yoga Aéreo<p class="hora">60 min</p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>9:30 AM</b></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Hatha<p class="hora">90 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Hatha<p class="hora">90 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>4:30 PM</b></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Yoga Aéreo KIDS<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Yoga Aéreo KIDS<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>6:00 PM</b></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Yoga Body<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par">Yoga Body<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar">Yoga Body<p class="hora">60 min</p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>7:00 PM</b></p></div>
        <div class="columna_dia_inpar">Power<p class="hora">90 min</p></div>
        <div class="columna_dia_par">Yoga Aéreo<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar">Vinyasa<p class="hora">90 min</p></div>
        <div class="columna_dia_par">Yoga Aéreo<p class="hora">60 min</p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
      <div class="divTableRow1">
        <div class="columna_horas"><p class="txt_tbl"><b>8:20 PM</b></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
        <div class="columna_dia_inpar"><p class="hora"></p></div>
        <div class="columna_dia_par"><p class="hora"></p></div>
      </div>
    </div>
  </div>
  <!-- DivTable.com -->
  <!-- Fin de tabla -->
</div>
<script  src="js/slider_controlado.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>