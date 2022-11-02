<!DOCTYPE html>

<!– pagina principal del cargado de datos con un header para acceder al resto de apartados –>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Datos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos2.0/estiloscarg.css">
</head>
<body>
    <header>
        <nav>
            <a href="buscar.php" class="mostrar.php"> Mostrar</a>
            <a href="salir.php" class="nav-link"> Salir</a>
        </nav>
    </header>
    <form  method="POST">
    <input type="text" name="nombreyapellido" placeholder="ingrese nombre y apellido">
    <input type="dni" name="dni" placeholder="ingrese dni">
    <input type="submit" name="guardar" value="guardar">
    </form>
    <?php
    include("guardar.php")
    ?>
</body>
</html>