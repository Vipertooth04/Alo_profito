<?php
$servername = "localhost";  // Cambia localhost si es necesario
$dbname = "profesores_san_pablo";  // Reemplaza con el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ejemplo de consulta para obtener datos de una tabla llamada 'usuarios'
    $stmt = $conn->query("SELECT nombre, descripcion FROM profesores_cs");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Generar el código HTML con los resultados de la consulta
    echo "<table>";
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        // Agrega más columnas según la estructura de tu tabla
        echo "</tr>";
    }
    echo "</table";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
