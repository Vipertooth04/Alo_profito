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
    <?php foreach ($carruseles as $carrusel) {
            require 'partials/carrusel.view.php';
    }       ?>  
    
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
        <div id="Contenedor_listas">
            <div id="Titulos">
                <h3>Titulos</h3>
                <ol>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                </ol>
            </div>
            <div id="division"></div>
            <div id="Linea-investigacion">
                <h3>Especialidades</h3>
                <ol>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                  <li>uno</li>
                </ol>
            </div>
        </div>
        <div id="Botones">
          <button id="button_horario">Horario</button>
          <div id="correo_profesor"><img src="media/iconos/mail.png">acuadros@ucsp.edu.pe</div>
        </div>
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