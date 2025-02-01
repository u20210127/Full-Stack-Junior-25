<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Biblioteca</title>
</head>
<body>
    <h1>Gestión de Biblioteca</h1>

    <?php
    require_once '../database.php';
    require_once '../model/modelo.php';
    require_once '../controller/controlador.php';

    // Inicializar las clases
    $conexion = new Conexion('base_datos.json');
    $modelo = new Modelo($conexion);
    $controlador = new Controlador($modelo);

    // Manejar la solicitud para agregar un libro
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] === 'agregar') {
        $id = uniqid(); // Generar un ID único para cada libro
        $titulo = htmlspecialchars($_POST['titulo']);
        $autor = htmlspecialchars($_POST['autor']);
        $categoria = htmlspecialchars($_POST['categoria']);

        // Agregar libro al sistema
        $controlador->agregarLibro($id, $titulo, $autor, $categoria);
        echo "<p>Libro agregado correctamente.</p>";
    }
    ?>

    <!-- Formulario para agregar un nuevo libro -->
    <h2>Agregar un Nuevo Libro</h2>
    <form method="POST" action="">
        <input type="hidden" name="accion" value="agregar">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required><br>

        <button type="submit">Agregar Libro</button>
    </form>

    <!-- Mostrar todos los libros -->
    <h2>Lista de Libros</h2>
    <div id="lista-libros">
        <?php
        $libros = $controlador->mostrarLibros();
        if (!empty($libros)) {
            foreach ($libros as $libro) {
                echo "<p><strong>Título:</strong> {$libro['titulo']}<br>";
                echo "<strong>Autor:</strong> {$libro['autor']}<br>";
                echo "<strong>Categoría:</strong> {$libro['categoria']}<br>";
                echo "<strong>Estado:</strong> {$libro['estado']}</p>";
            }
        } else {
            echo "<p>No hay libros registrados en el sistema.</p>";
        }
        ?>
    </div>
       <!-- Formulario para buscar un libro -->
       <form method="GET" action="">
        <label for="campo">Buscar por:</label>
        <select name="campo" id="campo" required>
            <option value="titulo">Título</option>
            <option value="autor">Autor</option>
            <option value="categoria">Categoría</option>
        </select>

        <input type="text" name="valor" placeholder="Ingrese su búsqueda" required>
        <button type="submit">Buscar</button>
    </form>

    <h2>Resultados de la búsqueda:</h2>
    <div id="resultados">
        <?php
        require_once '../database.php';
        require_once '../model/modelo.php';
        require_once '../controller/controlador.php';
    

        $conexion = new Conexion('base_datos.json');
        $modelo = new Modelo($conexion);
        $controlador = new Controlador($modelo);

        // Mostrar resultados de búsqueda si hay parámetros
        if (isset($_GET['campo']) && isset($_GET['valor'])) {
            $campo = $_GET['campo'];
            $valor = $_GET['valor'];

            $resultados = $controlador->buscarLibros($campo, $valor);

            if (!empty($resultados)) {
                foreach ($resultados as $libro) {
                    echo "<p><strong>Título:</strong> {$libro['titulo']}<br>";
                    echo "<strong>Autor:</strong> {$libro['autor']}<br>";
                    echo "<strong>Categoría:</strong> {$libro['categoria']}<br>";
                    echo "<strong>Estado:</strong> {$libro['estado']}</p>";
                }
            } else {
                echo "<p>No se encontraron libros con ese criterio.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
