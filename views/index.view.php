<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alo Profito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/tarjetas.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/proyeccion.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/carousel.css">
    </head>
    <!--En el Carousel el objetivo es tambien que este se pueda extraer mediante templates debido a el codigo repetitivo que presenta-->
    <!--cualquier cosa-->
    <body>
    <?php require 'partials/header.view.php' ?>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="media/Noticias/noticias2.jpg" class="d-block w-100" alt="perro1" height="700px" width="500px">
          <div class="carousel-caption d-none d-md-block">
            <h5>MEJORARÁN INTERACCIÓN DE ROBOTS TURÍSTICOS CON PERSONAS, EN NUEVO PROYECTO DE INVESTIGACIÓN</h5>
            <p>El objetivo del estudio es buscar que tengan reacciones similares a las humanas en su relación con interlocutores</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/Noticias/noticias3.jpg" class="d-block w-100" alt="perro2" height="700px" width="600px">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="noticia2">INTELIGENCIA ARTIFICIAL: EL ESTADO PERUANO Y CORPORACIONES NO PODRÁN USAR CHATGPT</h5>
            <p id="noticia2">Por: Julio Santisteban Pablo, docente del Departamento de Ciencia de la Computación de la Universidad Católica San Pablo, doctor en Ciencia de la de Computación, especialista en procesamiento del leguaje natural.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/Noticias/noticias1.jpg" class="d-block w-100" alt="perro3" height="700px">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="not3">SAN PABLO RECIBE DIPLOMA Y MEDALLA DE LA CULTURA POR PROYECTO PABLO BOT</h5>
            <p id="not3">Es el primer robot guía turístico del Perú y operará en 5 museos de Arequipa.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <table>
      <tr>
        <th><h1>PROFESORES</h1></th>
        <th><div class="arrow"></div></th>
        <th><p class="cont_alo_profito">En esta página web podrás encontrar la información básica de los profesores, incluyendo sus
          horarios, especialidades, los cursos que enseñan, sus trabajos de investigación y proyectos 
          actuales. Te invitamos a explorar la página para obtener detalles específicos sobre cada 
          docente y su labor dentro de la institución eductiva.</p></th>
      </tr>
    </table>
    <div class="sub">ALO PROFITO</div>

    <div id="resultado">
      <div id="Imagen-izquierda">
        <img src="media/Profesores/alex_cuadros.png" alt="">
      </div>
      <div id="Informacion">
        <div id="Nombre_profesor">
          Dr. Alex Jesús Cuadros Vargas
        </div>
        <div id="Descripcion_profesor">
          <p>El Dr. Alex Jesús Cuadros Vargas es un destacado investigador en el campo de la Ciencia de la Computación, con una sólida formación académica. Posee un Postdoctorado en Ciencia de la Computación obtenido en el ICMC-USP, Brasil, en 2009. Asimismo, cuenta con un Doctorado en Ciencia de la Computación y una Maestría en Ciencia de la Computación, ambos obtenidos también en el ICMC-USP, Brasil, en 2007 y 2001, respectivamente. Su línea de investigación se centra en la Computación Gráfica e Imágenes, abordando temas relevantes en este campo. Para cualquier consulta o comunicación, el Dr. Cuadros Vargas puede ser contactado a través de su correo electrónico: acuadros@ucsp.edu.pe. Su amplio bagaje académico y experiencia en investigación lo convierten en un referente en el ámbito de la Ciencia de la Computación.</p>
        </div>
        <button id="button_horario">Horario</button>
        <div id="correo_profesor"><img src="media/iconos/mail.png">acuadros@ucsp.edu.pe</div>
      </div>
    </div>

    <div class="Linea-Divisoria"></div>
    <div id="Parte_Luque_Arroyo">
      <div id="mostrar">
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php require 'partials/tarjetas.view.php' ?>
      </div>
    </div>
    
    <?php require 'partials/footer.view.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      function showProfe(btn){
        let query_profe = '#profe-' + btn.getAttribute("profe_id");
        console.log(query_profe);
        let profe_objeto = document.querySelector(query_profe);
        // let description = profe_objeto.querySelector('.description');
        document.querySelector('#mostrar').innerText = profe_objeto.innerText;
      }
    </script>
  </body>
</html>