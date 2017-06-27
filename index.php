<?php
$conexion = mysqli_connect('127.0.0.1','root','albertopro','recursamiento','3306');

if(!$conexion){
    die('error de conexion');
} else {
    $consulta = 'selec firstname,lastname,age,gender,email,phone,country_id from users';
    $resultado = mysql_query($conexion, $consulta);
    if(!$resultado) {
        echo 'error al ejecutar consulta'
        }else if($resultado->num_rows >0) {
            $usuarios = array();
            while ($usuario = $resultado->fetch_assoc()) {
                array_push($usuarios, $usuario);
            }
    }else{
        echo 'resultado sin registros de la consulta'
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pruebas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>EDAD</th>
                <th>GENERO</th>
                <th>CORREO ELECTRONICO</th>
                <th>TELEFONO</th>
                <th>PAIS</th>
            </tr>      
        </thead>
        <tbody>
            <tr>
                <td>alberto ulises</td>
                <td>pacheco castro</td>
                <td>16</td>
                <td>masculino</td>
                <td>albertoulises64@gmail.com</td>
                <td>6871349194</td>
                <td>mexico</td>
            </tr>
        </tbody>
    
    </table>
</body>
</html>
