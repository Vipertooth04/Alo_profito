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
    
    <style>
      *{
          margin: 0px;
          padding: 2px;
      }

      body{
        width: 100%;
        height: 100%;
        background-color: #302C42;
        color: white;
        overflow-x: hidden;
        font-family: 'Montserrat';
      }

      p{
        font-size: 10um;
      }
      th>h1{
        font-size: 2em;
        font-weight: 900;
      }

      .sub{
        margin-left: 100px;
        position: relative;
        font-weight: thin;
        font-size: 2em;
        top: -50px;
      }

      table{
        margin-left: 100px;
      }

      .cont_alo_profito{
        width: 79ch;
      }
    
      th{color: white;}
      
      .cointainer{
      display: flex;
      background-color: #202020;
      }
      .column{
          flex: 1;
          padding: 20px;
          color: white;
      }
      .column:first-child {
          display: flex;
          align-items: center;
          margin-top: 9px;
          margin-bottom: 9px;
      }
      .column:nth-child(2){
          line-height: 1.2;
          margin-top: 15px;
      }
      .email{
          color: white;
          text-decoration: none;
      }
      .column:last-child{
          margin-top: 20px;
      }

      .column:last-child .link{
          font-size: 18px;
          color: white;
          text-decoration: none;
      }
      .column:last-child p{
          text-align: right;
          line-height: 0.6;
      }

      .main{
        margin: 2%;
      }
      
      .card{
            width: 55%;
            display: inline-block;
            box-shadow: 1px 1px 5px #433D60;
            border-radius: 30px; 
            margin: 25%;
            margin-top: 2%;
            margin-bottom: 5%;
        }
      
      .image_profesores img{
        width: 70%;
        margin-left: 15%;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        border-radius: 100%;
        box-shadow: 1px 1px 5px #433D60;
      }
      
      .title>h1{
        text-align: left;
        padding: 10px;
        color: white;
        font-weight: bold;
        margin-bottom: 10%;
        font-size: 1.5rem;
      }

      .card{
        background: radial-gradient(#433D60,#211E2E);
      }

      
      h1{
        font-size: 20px;
      }
      
      .des .button{
        padding: 3px;
        text-align: center;
        padding-top: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
      }

      .des{
        color: white;
      }

      button{
        margin-top: 2px;
        margin-bottom: 2px;
        background-color: white;
        border: 1px solid black;
        border-radius: 5px;
        padding:10px;
 
      }
      button:hover{
        background-color: black;
        color: white;
        transition: .5s;
        cursor: pointer;
      }
      #resultado{
        width: 100%;
        height: 50vh;
      }
      #Imagen-izquierda{
        background-image: url(media/alex_cuadros.png);
        border-radius: 40% 20% 40% 20%;
        margin-left: 10%;
        width: 25%;
        height: 90%;
        float: left;
      }
      #Informacion{ 
        float: right;
        margin-right: 10%;
      }
      #Nombre_profesor{ 
        margin-bottom: 10%;
        font-size: 50px;
        font-weight:500;
      }
      #Descripcion_profesor{
        width:79ch ;
      }
      #button_horario{
        float: left;
        background: linear-gradient(to right, #8176AF, #C0B7E8);
        width: 20%;
        height: 10%;
        border-radius: 30px;
        font-weight: bold;
      }
      .carousel-caption{
        color: white;
      }


      #correo_profesor{
        position: relative;
        top: -10px;
        margin-left: 50%;
      }

      .button_ver_mas{
        margin-left: 22%;
        background: linear-gradient(to right, #8176AF, #C0B7E8);
        width: 50%;
        height: 10%;
        border-radius: 30px;
        font-weight: bold;
      }

      footer{
        margin-top: 22px;
      }

    </style>
</head>
  <body>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="media/noticias2.jpg" class="d-block w-100" alt="perro1" height="700px" width="500px">
          <div class="carousel-caption d-none d-md-block">
            <h5>MEJORARÁN INTERACCIÓN DE ROBOTS TURÍSTICOS CON PERSONAS, EN NUEVO PROYECTO DE INVESTIGACIÓN</h5>
            <p>El objetivo del estudio es buscar que tengan reacciones similares a las humanas en su relación con interlocutores</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/noticias3.jpg" class="d-block w-100" alt="perro2" height="700px" width="600px">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="noticia2">INTELIGENCIA ARTIFICIAL: EL ESTADO PERUANO Y CORPORACIONES NO PODRÁN USAR CHATGPT</h5>
            <p id="noticia2">Por: Julio Santisteban Pablo, docente del Departamento de Ciencia de la Computación de la Universidad Católica San Pablo, doctor en Ciencia de la de Computación, especialista en procesamiento del leguaje natural.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/noticias1.jpg" class="d-block w-100" alt="perro3" height="700px">
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
        <th><img src="media/flecha.png" alt="flechita" height="100px" width="700px"></th>
        <th><p class="cont_alo_profito">En esta página web podrás encontrar la información básica de los profesores, incluyendo sus
          horarios, especialidades, los cursos que enseñan, sus trabajos de investigación y proyectos 
          actuales. Te invitamos a explorar la página para obtener detalles específicos sobre cada 
          docente y su labor dentro de la institución eductiva.</p></th>
      </tr>
    </table>
    <div class="sub">ALO PROFITO</div>

    <div id="resultado">
      <div id="Imagen-izquierda">
      </div>
      <div id="Informacion">
        <div id="Nombre_profesor">
          Dr. Alex Jesús Cuadros Vargas
        </div>
        <div id="Descripcion_profesor">
          <p>El Dr. Alex Jesús Cuadros Vargas es un destacado investigador en el campo de la Ciencia de la Computación, con una sólida formación académica. Posee un Postdoctorado en Ciencia de la Computación obtenido en el ICMC-USP, Brasil, en 2009. Asimismo, cuenta con un Doctorado en Ciencia de la Computación y una Maestría en Ciencia de la Computación, ambos obtenidos también en el ICMC-USP, Brasil, en 2007 y 2001, respectivamente. Su línea de investigación se centra en la Computación Gráfica e Imágenes, abordando temas relevantes en este campo. Para cualquier consulta o comunicación, el Dr. Cuadros Vargas puede ser contactado a través de su correo electrónico: acuadros@ucsp.edu.pe. Su amplio bagaje académico y experiencia en investigación lo convierten en un referente en el ámbito de la Ciencia de la Computación.</p>
        </div>
        <button id="button_horario">Horario</button>
        <div id="correo_profesor"><img src="media/mail.png">acuadros@ucsp.edu.pe</div>
      </div>
    </div>

    <div id="Parte_Luque_Arroyo">
      <div id="mostrar">
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div id="profe-1">
              <div class="image_profesores">
                <img src="media/alex_cuadros.png">
              </div>
              <div class="title">
                <h1>Dr. Alex Jesús Cuadros Vargas</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Computación Gráfica e Imágenes.</p>
              </div>
            </div>
            <button profe_id="1" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-2">
              <div class="image_profesores">
                <img src="media/manuel_loayza.png">
              </div>
              <div class="title">
                <h1>Dr. Manuel Loaiza Fernández</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Imágenes, Visión Computacional, Computación Gráfica.</p>
              </div>
            </div>
            <button profe_id="2" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-3">
              <div class="image_profesores">
                <img src="media/regina_ticona.png">
              </div>
              <div class="title">
                <h1>Dr. Regina Paola Ticona Herrera</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Web Semántica, Base de Datos e Interacción Humano Computador.</p>
              </div>
            </div>
            <button profe_id="3" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-4">
              <div class="image_profesores">
                <img src="media/yvan_tupac.png">
              </div>
              <div class="title">
                <h1>Dr. Yván Jesús Túpac Valdivia</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Bioinformática.</p>
              </div>
            </div>
            <button profe_id="4" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-5">
              <div class="image_profesores">
                <img src="media/julio_santisteban.png">
              </div>
              <div class="title">
                <h1>Dr. Julio Omar Santisteban Pablo</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Procesamiento del Lenguaje Natural y Servicios Web.</p>
              </div>
            </div>
            <button profe_id="5" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-6">
              <div class="image_profesores">
                <img src="media/jose_ochoa.png">
              </div>
              <div class="title">
                <h1>Dr. Jose Eduardo Ochoa Luna</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Inteligencia Artificial.</p>
              </div>
            </div>
            <button profe_id="6" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-7">
              <div class="image_profesores">
                <img src="media/erick_gomez.png" >
              </div>
              <div class="title">
                <h1>Dr. Erick Gomez Nieto</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Visualización, Análisis Visual, Computación Gráfica.</p>
              </div>
            </div>
            <button profe_id="7" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-8">
              <div class="image_profesores">
                <img src="media/daniel_gutierrez.png" >
              </div>
              <div class="title">
                <h1>Dr. Daniel Alexis Gutiérrez Pachas</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Ciencia de Datos, Optimización y Modelamiento Estocástico.</p>
              </div>
            </div>
            <button profe_id="8" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div id="profe-9">
              <div class="image_profesores">
                <img src="media/graciela_meza.png">
              </div>
              <div class="title">
                <h1>Dr. Graciela Lecireth Meza Lovón</h1>
              </div>
              <div class="des">
                <p>Línea de investigación: Imágenes e Inteligencia Artificial.</p>
              </div>
            </div>
            <button profe_id="9" onclick="showProfe(this)" class="button_ver_mas"> Ver más </button>
          </div>
        </div>
      </div>
    </div>
    
    <?php require 'partials/footer.view.php' ?>


    <script>
      $(document).ready(function() {
            $.ajax({
                url: 'Database.php',  // Reemplaza 'tuscript.php' con el nombre de tu archivo PHP
                dataType: 'html',
                success: function(response) {
                    $('#resultado').html(response);
                }
            });
        });
    </script>

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