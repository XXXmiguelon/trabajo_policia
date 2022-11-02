
<?php
/*  conexion con la base de datos y validacion de el guardado de nombres y apellidos  con sus dnis*/
$conexion= mysqli_connect("localhost","root","miguel","policia");

if (isset($_POST['guardar'])){
    if(strlen($_POST['nombreyapellido']) > 1 && strlen($_POST['dni']) > 1 ){
        $nombreyapellido = $_POST['nombreyapellido'];
        $dni = $_POST['dni'];
        $consulta = "INSERT INTO dbcargausuario (nombreapellido,dni) VALUES ('$nombreyapellido','$dni')";
        //verificar dni existente
        $verificardni  = mysqli_query($conexion,"SELECT * FROM dbcargausuario WHERE dni = '$dni' ");
        if(mysqli_num_rows($verificardni) > 0 ){
                ?>
                <center><h1 class="mal">PERSONA REGISTRADA</h1></center>
                <?php
            exit();
        }

        $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                ?>
                <center><h1 class="bien">SE HA GUARDADO DE FORMA EXITOSA</h1></center>
                <?php
            } else{
                ?>
                <center><h1 class="mal">A OCURRIDO UN ERROR</h1></center>
                <?php
            }
    }else{
        ?>
                <center><h1 class="mal">COMPLETE LOS CAMPOS</h1></center>
                <?php
    }
}
?>