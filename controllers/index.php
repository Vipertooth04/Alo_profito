<?php
$servername = "localhost";  // Cambia localhost si es necesario
$dbname = "profesores_san_pablo";  // Reemplaza con el nombre de tu base de datos



try {

    $carruseles = [
        [
            'id' => 1,
            'titulo' => "MEJORARÁN INTERACCIÓN DE ROBOTS TURÍSTICOS CON PERSONAS, EN NUEVO PROYECTO DE INVESTIGACIÓN", 
            'descripcion' => "El objetivo del estudio es buscar que tengan reacciones similares a las humanas en su relación con interlocutores", 
            'imagen' => "media/Noticias/noticias2.jpg",
        ],
        [
            'id' => 2,
            'titulo' => "INTELIGENCIA ARTIFICIAL: EL ESTADO PERUANO Y CORPORACIONES NO PODRÁN USAR CHATGPT", 
            'descripcion' => "Por: Julio Santisteban Pablo, docente del Departamento de Ciencia de la Computación de la Universidad Católica San Pablo, doctor en Ciencia de la de Computación, especialista en procesamiento del leguaje natural.", 
            'imagen' => "media/Noticias/noticias3.jpg",
        ],
        [
            'id' => 3,
            'titulo' => "SAN PABLO RECIBE DIPLOMA Y MEDALLA DE LA CULTURA POR PROYECTO PABLO BOT", 
            'descripcion' => "Es el primer robot guía turístico del Perú y operará en 5 museos de Arequipa.", 
            'imagen' => "media/Noticias/noticias1.jpg",
        ]
    ];
    
    if (array_key_exists( "carrusel_id", $_GET)) {
        
        // Reemplazar por una lógica de select en la BD
        $carrusel_actual = array_values(array_filter($carruseles, function($carrusel) {
            return strval($carrusel['id']) === $_GET['carrusel_id'];
        }))[0];
    }

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // profesores
    $stmt = $conn->query("SELECT id_profesor, nombre, descripcion, ruta_imagen FROM profesores_cs");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Especialidad
    $stmt2 = $conn->query("SELECT DISTINCT p.nombre AS profesor, e.especialidad AS especialidades
    FROM profesores_cs p
    JOIN profesores_especialidades pe ON p.id_profesor = pe.id_profesor
    JOIN especialidades e ON pe.id_especialidad = e.id_especialidades;
    ");
    $especialidad = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    //titulo
    $stmt3 = $conn->query("SELECT DISTINCT p.nombre AS profesor,t.titulo AS titulo, t.institucion AS institucion,t.pais AS pais,pt.anio AS year
    FROM profesores_cs p
    JOIN profesores_titulos pt ON p.id_profesor = pt.id_profesor
    JOIN titulos_academicos t ON pt.id_titulo = t.id_titulo
    LIMIT 0, 25;");
    $titulos = $stmt3->fetchAll(PDO::FETCH_ASSOC);

    // correo-electronico
    $stmt4 = $conn->query("SELECT p.nombre AS profesor, c.correo_electronico AS correo
    FROM profesores_cs p
    JOIN correos_electronicos c WHERE p.id_profesor=c.id_profesor;");
    $correo = $stmt4->fetchAll(PDO::FETCH_ASSOC);

    $objetos_profesores = array();
    foreach ($results as $row) {
        $profesor = array(
            'id'=>$row['id_profesor'],
            'nombre' => $row['nombre'],
            'descripcion' => $row['descripcion'],
            'imagen' => $row['ruta_imagen'],
            'especialidades' => array(),
            'titulos' => array(),
            'correos_electronicos' => array()
        );

        foreach ($especialidad as $esp) {
            if ($esp['profesor'] === $row['nombre']) {
                $profesor['especialidades'][] = $esp['especialidades'];
            }
        }

        foreach ($titulos as $til) {
            if ($til['profesor'] === $row['nombre']) {
                $profesor['titulos'][] = $til['titulo'];
            }
        }

        foreach ($correo as $cor) {
            if ($cor['profesor'] === $row['nombre']) {
                $profesor['correos_electronicos'][] = $cor['correo'];
            }
        }

        $objetos_profesores[] = $profesor;
        // Aquí puedes utilizar el objeto $profesor según tus necesidades
    }

    $primer_profesor = $objetos_profesores[0];
    
    var_dump($_GET);
    
    if (array_key_exists("prof_id", $_GET)) {
        $prof_id = $_GET['prof_id'];
        foreach ($objetos_profesores as $aux) {
            if ($aux['id'] === $prof_id) {
                $primer_profesor = $aux;
            }
        }
    }
    


} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

require "views/index.view.php";
?>
