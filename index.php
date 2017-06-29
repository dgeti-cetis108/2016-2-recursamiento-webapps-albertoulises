<?php
$conexion = mysqli_connect('127.0.0.1','root','albertopro','recursamiento','3306');
$usuarios = array();

if(!$conexion){
    die('error de conexion');
} else {
    $consulta = "select * from vw_users;";
    $resultado = mysql_query($conexion, $consulta);
    if(!$resultado) {
        echo 'error al ejecutar consulta'
        } else if($resultado->num_rows > 0) {
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
           <?php if(count($usuarios) > 0) { ?>
            <?php foreach($usuarios as $campo => $valor) { ?>
            <tr>
                <td><?php echo $campo['firstname']; ?> </td>
                <td><?php echo $campo['lastname']; ?></td>
                <td><?php echo $campo['age']; ?></td>
                <td><?php echo $campo['gender']; ?></td>
                <td><?php echo $campo['email']; ?></td>
                <td><?php echo $campo['phone']; ?></td>
                <td><?php echo $campo['country']; ?></td>
            </tr>
            <?php } } else {  ?>
               <tr>
                  <td colspan="7">no hay registros de usuarios</td>                
               </tr>
            <?php } ?>
        </tbody>
    
    </table>
</body>
</html>
