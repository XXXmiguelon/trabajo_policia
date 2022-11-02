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

<body class="body">
    <header>
        <nav>
            <a href="cargar.php" class="cargar.php"> Cargar</a>
            <a href="salir.php" class="salir.hp"> Salir</a>
        </nav>
    </header>

    <h1> Lista de Registrados</h1>
    <a class="volver" type="button" href="buscar.php">Volver a busqueda</a>
    </form>
    <table class="tabla">
        <tr>
            <th>NOMBRE Y APELLIDO</th>
            <th>DNI</th>
        </tr>
            <?php
                $sql = "SELECT * FROM dbcargausuario";
                $resultado = mysqli_query($conexion,$sql);
                while($mostrar = mysqli_fetch_array($resultado)){
                    if (str_contains($mostrar['nombreapellido'], $_POST['busqueda']) || str_contains($mostrar['dni'], $_POST['busqueda'])){
                        ?>  
                        <tr>
                            <td><?php echo $mostrar['nombreapellido'] ?></td>
                            <td><?php echo $mostrar['dni'] ?></td>
                        </tr>
                        <?php
                    }            
            }
            ?>       
    </table>


</body>
</html>