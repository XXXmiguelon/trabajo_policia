<?php
/*conexion con la base de datos ademas de la validacion de los datos ingresados por teclado,
 para el acceso a la pagina principal  */
 
$USUARIO= $_POST['usuario'];
$CONTRASEÑA= $_POST['contraseña'];

$conexion= mysqli_connect("localhost","root","miguel","policia");
$consulta= "SELECT * FROM dbusuario WHERE  usuario= '$USUARIO' and contraseña='$CONTRASEÑA' ";
$resultado= mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);
    if ($filas > 0){
        header("location:paginaprincipal.php ");

    }else{
        include("index.php");
        ?>
        <center><h1>ERROR DE AUTENTIFICACION</h1></center>
        <?php
    }
mysqli_free_result($resultado);
mysqli_close($conexion);    