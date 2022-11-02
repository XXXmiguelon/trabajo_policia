<?php
$conexion= mysqli_connect("localhost","root","miguel","policia");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Registrados</title>
    <link rel="stylesheet" href="estilos2.0/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos2.0/estilosmostrar.css">
</head>

<body>
    <header>
        <nav>
            <a href="cargar.php" class="cargar.php"> Cargar</a>
            <a href="salir.php" class="nav-link"> Salir</a>
        </nav>
    </header>
    
    <main>
        <h1> Lista de Registrados</h1>
        <form action="mostrar.php" method="POST" class="formbuscador">
            <input type="text" name="busqueda" id="busqueda" value="miguel">
            <input type="submit" value="buscar" class="botonbuscar">
        </form>
    </main> 
    


</body>
</html>