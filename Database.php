<?php
$servername = "localhost";  // Cambia localhost si es necesario
$dbname = "profesores_san_pablo";  // Reemplaza con el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // profesores
    $stmt = $conn->query("SELECT nombre, descripcion FROM profesores_cs");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Especialidad
    $stmt2 = $conn->query("SELECT p.nombre AS profesor, e.especialidad AS especialidades
    FROM profesores_cs p
    JOIN profesores_especialidades pe ON p.id_profesor = pe.id_profesor
    JOIN especialidades e ON pe.id_especialidad = e.id_especialidades
    LIMIT 0, 25;
    ");
    $especialidad = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //titulo
    $stmt3 = $conn->query("SELECT DISTINCT p.nombre AS profesor,t.titulo AS titulo, t.institucion AS institucion,t.pais AS pais,pt.anio AS year
    FROM profesores_cs p
    JOIN profesores_titulos pt ON p.id_profesor = pt.id_profesor
    JOIN titulos_academicos t ON pt.id_titulo = t.id_titulo
    LIMIT 0, 25;");
    $titulos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    // correo-electronico
    $stmt4 = $conn->query("SELECT p.nombre AS profesor, c.correo_electronico AS correo
    FROM profesores_cs p
    JOIN correos_electronicos c WHERE p.id_profesor=c.id_profesor;");
    $correo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row){
        $profesor=array(
            'nombre'=>$row['nombre'],
            'descripcion'=>$row['descripcion'],
            'especialidades' => array(),
            'titulos' => array(),
            'correos_electronicos'=>array()
        );

        foreach ($especialidad as $esp){
            if ($esp['profesor']===$nombre){
                $profesor['especialidades'][]=$esp['especialidades'];
            }
        }

        foreach ($titulos as $til){
            if ($til['profesor']===$nombre){
                $profesor['titulos'][]=$til['titulo'];
            }
        }

        foreach ($correo as $cor){
            if ($cor['profesor']===$nombre){
                $profesor['correos_electronicos'][]=$til['correo'];
            }
        }
    }
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
