<?php
// Reportar errores para saber qué falla exactamente
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Datos de conexión
$servidor = "localhost";
$usuario  = "root";
$password = ""; 
$base_datos = "biblioteca"; // <--- ASEGÚRATE QUE ESTE NOMBRE SEA CORRECTO

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar si la conexión falló
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Recibir datos con seguridad básica
$codigo    = $_POST['codigo'] ?? '';
$editorial = $_POST['nombre'] ?? '';
$direccion = $_POST['direccion'] ?? '';
$contacto  = $_POST['contacto'] ?? '';




// 3. Consulta SQL (Asegúrate de que la tabla se llame 'editorial')
$sql = "INSERT INTO editorial(codigo, nombre, direccion, contacto) 
        VALUES ('$codigo', '$editorial', '$direccion', '$contacto')";

if (mysqli_query($conexion, $sql)) 
    {
    echo "<script>
            alert('Su registro ha sido exitoso ✔✔');
            window.location.href='index.php';
        </script>";
    }
else {
    echo "Error en la base de datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
