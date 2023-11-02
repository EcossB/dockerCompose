<!DOCTYPE html>
<html>
<head>
    <title>Practica Docker Compose</title>
</head>
<body>
    <h1>Practica Docker Compose hecha por Erwing Coss 20211869</h1>
    <p> En esta practica aprendi a utilizar 
        </br> docker compose en una aplicacion PHP 
        </br> que se conecta con base de datos difentes 
    </p>

    <p>Creado por Erwing Coss</p> 

    <?php
    $host = getenv('MYSQL_HOST');
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = getenv('MYSQL_DATABASE');

    // Intenta conectarte a la base de datos MySQL/MariaDB
    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }

    echo "¡Conexión exitosa a la base de datos! Gracias por ver mi pagina!";
    ?>

</body>
</html>