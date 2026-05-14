<?php
$host = "localhost";
$user = "root";
$pass = ""; // En Laragon suele estar vacío por defecto
$db   = "biblioteca";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>biblioteca</title>
</head>
<h1>Bienvenidos a la Biblioteca Pública "Juan Vicente González"</h1> 
<p> mas que libros, somos comunidad. la Biblioteca Juan Vicente González es el hogar<br>
    del conocimiento en el municipio independencia.Ven y descubre el mundo sin salir<br>
    de Santa Teresa "UN PUEBLO QUE LEE ES UN PUEBLO QUE PIENSA"📊✨</p>

    <div class="box:hover" style="display: flex; justify-content: flex-start; gap: 20px; margin:10px;">
    <button><img src="Library.jpg" width="400" height="300"></button>
    <button><img src="mesas.jpg" width="400" height="300"></button>
    </div>
    <div style="display: flex; justify-content: flex-end; gap:20px;">
    <button><img src="CC.jpg" width="400" height="300" ></button>
    <button><img src="BB.jpg" width="400" height="300"></button>
    </div>
    

    </div>
    <h2 style="text-align: center;">Integrantes del Proyecto</h2>

<div class="contenedor-integrantes">
    
    <div class="tarjeta">
        <img src="Kerlys.jpg" alt="Foto" class="foto-perfil">
        <h3>kerlys Blanco</h3>
        <p>Administración e Informática</p>
        <p class="cedula">V-30.950.581</p>
    </div>

    <div class="tarjeta">
        <img src="Daniel.jpg" alt="Foto" class="foto-perfil">
        <h3>Daniel Echegarreta</h3> 
        <p>Administración e Informática</p>
        <p class="cedula">V-30.777.319</p>
    </div>

    <div class="tarjeta">
        <img src="Yoxiely.jpg" alt="Foto" class="foto-perfil">
        <h3>Yoxiely Zurita</h3>
        <p>Administración e Informática</p>
        <p class="cedula">V-30.614.138</p>
    </div>
</div>
<body>
    <h2>biblioteca Editorial</h2>
    <form action="guardar.php" method="POST">

        <label>codigo:</label><br>
        <input type="text" name="codigo" required><br>

        <label>Nombre de la Editorial:</label><br>
        <input type="text" name="Nombre de la Editorial" required><br>

        <label>Dirección:</label>
        <input type="text" name="Dirección" required>

        <label>Contacto (Teléfono/Email):</label>
        <input type="text" name="Contacto (Teléfono/Email)" required><br>

        <button type="submit">Guardar Editorial</button>
    </form>
    <h2>biblioteca prestamos</h2>
    <form action="guardar.php" method="POST">

        <label>codigo:</label><br>
        <input type="text" name="codigo" required><br>

        <label>libro:</label><br>
        <input type="text" name="libro" required><br>

        <label>socio:</label>
        <input type="text" name="socio" required>

        <label>fecha_prestamo:</label>
        <input type="text" name="fecha_prestamo" required>

        <label>fecha_devolución:</label><br>
        <input type="text" name="fecha_devolución" required><br>

        <button type="submit">Guardar Prestamo</button>
    </form>
    <h2>biblioteca libros</h2>
    <form action="guardar.php" method="POST">

        <label>codigo:</label><br>
        <input type="text" name="codigo" required><br>

        <label>titulo:</label>
        <input type="text" name="titulo" required>

        <label>autor:</label>
        <input type="text" name="autor" required>

        <label>cant_pag:</label><br>
        <input type="text" name="cant_pag" required><br>

        <label>portada:</label>
        <input type="text" name="portada" required>

        <label>Año:</label>
        <input type="text" name="Año" required>

        <label>editorial:</label>
        <input type="text" name="editorial" required><br>

        <label>genero:</label>
        <input type="text" name="genero" required>

        <button type="submit">Guardar Libro</button>
    </form>
    <h2>biblioteca socios</h2>
    <form action="guardar.php" method="POST">
        <label>codigo:</label><br>
        <input type="text" name="codigo" required><br>

        <label>nombre:</label><br>
        <input type="text" name="nombre" required><br>

        <label>dirección:</label><br>
        <input type="text" name="direccion" required><br>

        <label>telefono:</label>
        <input type="text" name="telefono" required>

        <label>fecha_nacimiento:</label>
        <input type="text" name="fecha_nacimiento" required>

        <button type="submit">Guardar Socio</button>
    </form>
    <h2>biblioteca autores</h2>
    <form action="guardar.php" method="POST">
        <label>codigo:</label>
        <input type="text" name="codigo" required><br>

        <label>nombre:</label>
        <input type="text" name="nombre" required>

        <label>fecha_nacimiento:</label><br>
        <input type="text" name="fecha_nacimiento" required>

        <label>nacionalidad:</label>
        <input type="text" name="nacionalidad" required>

        <button type="submit">Guardar autores</button>
    </form>
    <h2>biblioteca generos</h2>
    <form action="guardar.php" method="POST">
        <label>codigo:</label><br>
        <input type="text" name="codigo" required>

        <label>nombre:</label><br>
        <input type="text" name="nombre" required>

        <label>obs:</label><br>
        <input type="text" name="obs" required>

        <label>restricción:</label>
        <input type="text" name="restriccion" required>

        <button type="submit">Guardar generos</button>
    </form>
    <h2>biblioteca paises</h2>
    <form action="guardar.php" method="POST">
        <label>codigo:</label>
        <input type="text" name="codigo" required>

        <label>nombre:</label>
        <input type="text" name="nombre" required>

        <label>continente:</label><br>
        <input type="text" name="continente" required>

        <label>lengua:</label>
        <input type="text" name="lengua" required>

        <button type="submit">Guardar País</button>
    </form>

    
    <style>
    :root {
        --primary: #6366f1;
        --secondary: #a855f7;
        --bg: #0f172a;
    }
    /*Cada codigo que empieza aqui son las identificaciones de
    las estructuras como titulo body button etc. */
    body { 
        background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
        color: white;
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 40px 20px;
    }

    .titulo {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 40px;
        background: linear-gradient(to right, #818cf8, #c084fc);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    /* Grid 3x3 Centrado */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        max-width: 1100px;
        width: 100%;
    }

    /* Tarjetas con efecto Cristal */
    .card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 27px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;;
    }

    .card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        border-color: var(--primary);
    }

    .card h3 {
        margin: 0 0 15px 0;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #e2e8f0;
    }

    /* Inputs Estilizados */
    input {
        width: 100%;
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 12px;
        border-radius: 12px;
        color: white;
        margin-bottom: 15px;
        outline: none;
        transition: 0.3s;
    }

    input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
    }

    form{
        width: 100%;
        max-width: 700px;
        margin-bottom: 50px;
    }
    /* button ya que vendria siendo los estilos centrando los procesos*/  
    button {
        width: 100%;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        color: white;
        border: none;
        padding: 12px;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: 0.3s;
    }
    .contenedor-integrantes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.tarjeta {
    background: #16213e; /* Fondo oscuro como tu interfaz */
    border: 2px solid #00d2ff;
    border-radius: 15px;
    width: 250px;
    padding: 20px;
    text-align: center;
    color: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.foto-perfil {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #30305a;
    margin: 0 auto 15px;
    border: 3px solid #e94560;
    object-fit: cover; /* Para que la foto no se deforme */
    display: block;
}
.box:hover{
    display: flex;
    justify-content: flex-end;
    gap:20px; 
    
    
    

    }

.tarjeta h3 {
    margin: 10px 0 5px;
    font-size: 1.2em;
    color: #00d2ff;
}

.tarjeta p {
    margin: 5px 0;
    font-size: 0.9em;
    opacity: 0.9;
}

.cedula {
    font-weight: bold;
    color: #e94560;
}

    button:hover {
        filter: brightness(1.2);
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
    }

    @media (max-width: 900px) { .grid-container { grid-template-columns: 1fr; } }
    </style>
    <h1>Acontinuación se muestran los libros disponibles en la biblioteca</h1>
    <a href="Walter.Riso a.pdf" target="_blank" style="color: white;"><h1>El libro de Amar y no Sufras 📕</h1></a>
    <a href="Mario Benedetti.pdf" target="_blank" style="color: white;"><h1>El libro de La tregua 📗</h1></a>
    <a href="El Regreso del caballero.pdf" target="_blank" style="color: white;"><h1>El libro de El Regreso del caballero de la Armadura Oxidada 📘</h1></a>
    </div>

<h1 class="titulo">Library OS Interface</h1>
    <div class="grid-container">
    <div class="card"><h3>🏢 Editorial</h3><input type="text" name="NN" placeholder="Nombre de Editorial">
    <a href="PPP.php" target="_blank"><button>Registrar</button></a></div>
    <div class="card"><h3>📚 Libros</h3><input type="text" name="titulo" placeholder="Título del Libro">
    <a href="PPP.php" target="_blank"><button>Añadir</button></a></div>
    <div class="card"><h3>👥 Socios</h3><input type="text" name="incluidos" placeholder="Nombre Completo">
    <a href="PPP.php" target="_blank"><button>Inscribir</button></a></div>

    <!-- Fila 2 -->
    <div class="card"><h3>📅 Préstamos</h3><input type="date" name="fecha_prestamo" >
    <a href="PPP.php" target="_blank"><button>Generar Ticket</button></a></div>
    <div class="card"><h3>✍️ Autores</h3><input type="text" name="biografia" placeholder="Biografía corta">
    <a href="PPP.php" target="_blank"><button>Guardar</button></a></div>
    <div class="card"><h3>🌍 Países</h3><input type="text" name="nombre_pais" placeholder="Origen">
    <a href="PPP.php" target="_blank"><button>Vincular</button></a></div>

    <!-- Fila 3 -->
    <div class="card"><h3>🎭 Géneros</h3><input type="text" name="genero" placeholder="Categoría">
    <a href="PPP.php" target="_blank"><button>guardar</button></a></div>
    <div class="card"><h3>📊 Reportes</h3><p style="font-size:0.8rem; color:#94a3b8">Estadísticas mensuales</p>
    <button style="background:#059669">Descargar</button></div>
    <div class="card"><h3>⚙️ Sistema</h3><p style="font-size:0.8rem; color:#94a3b8">Ajustes de Admin</p>
    <button style="background:#475569">Configurar</button></div>
    </div>

</body>
</html>

<?php
include("guardar.php");

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];
$codigo= $_POST['codigo'];
$libro = $_POST['libro'];
$socio = $_POST['socio'];
$fecha_prestamo = $_POST['fecha_prestamo'];
$fecha_devolución = $_POST['fecha_devolución'];
$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$cant_pag = $_POST['cant_pag'];
$portada = $_POST['portada'];
$año = $_POST['año'];
$editorial = $_POST['editorial'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$codigo = $_POST['codigo'];
$nombre_pais = $_POST['nombre'];
$continente = $_POST['continente'];
$lengua = $_POST['lengua'];
$codigo_socio = $_POST['codigo'];
$nombre_socio = $_POST['nombre'];
$direccion_socio = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$codigo_autor = $_POST['codigo'];
$nombre_autor = $_POST['nombre'];
$fecha_nacimiento_autor = $_POST['fecha_nacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$codigo_genero = $_POST['codigo'];
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$incluidos = $_POST['incluidos'];
$NN = $_POST['NN'];


$sql = "INSERT INTO editorial (nombre, direccion, contacto, codigo, libro, socio, fecha_prestamo,
    fecha_devolución, titulo, autor, cant_pag, portada, año, editorial, genero, nombre_pais,
    continente, lengua, nombre_socio, direccion_socio, telefono, fecha_nacimiento, nombre_autor,
    fecha_nacimiento_autor, nacionalidad, codigo_genero, nombre, titulo, incluidos, NN) 
        VALUES ('$nombre', '$direccion', '$contacto', '$codigo', '$libro', '$socio', 
        '$fecha_prestamo', '$fecha_devolución', '$titulo', '$autor', '$cant_pag', '$portada', 
        '$año', '$editorial', '$genero', '$nombre_pais', '$continente', '$lengua', 
        '$nombre_socio', '$direccion_socio', '$telefono', '$fecha_nacimiento', '$nombre_autor',
        '$fecha_nacimiento_autor', '$nacionalidad', '$codigo_genero', '$nombre', '$titulo', 
        '$incluidos', '$NN')";

if (mysqli_query($conexion, $sql)) {
    echo "¡Editorial guardada con éxito!";
    echo "<br><a href='registro_editorial.php'>Volver</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>