<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Crud PHP</title>
</head>
<body>
    <h1>Crud PHP y MySQL</h1>
    <form action="formulario.php" method="post" class="row g-3">
        <div class="col-md-6">

            <label for="" class="form-label">Identificación: </label>
            <input type="text" name="id" id="" class="form-control" placeholder="Ingrese su CC">
        </div>
        <div class="col-md-6">

            <label for="" class="form-label">Nombres: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre">
        </div>
        <div class="col-md-6">

            <label for="" class="form-label">Apellidos: </label>
            <input type="text" name="apellido" id="" class="form-control" placeholder="Ingrese sus apellidos">
        </div>
        <div class="col-md-6">

            <label for="" class="form-label">Telefono de contacto: </label>
            <input type="text" name="telefono" id="" class="form-control" placeholder="Ingrese su numero de telefono">
        </div>
        <div class="col-md-6">

            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" name="fecha" id="" class="form-control" placeholder="Ingrese su fecha de nacimiento">
        </div>
        <div class="col-md-6">

            <label for="" class="form-label">Correo electrónico: </label>
            <input type="text" name="correo" id="" class="form-control" placeholder="ejemplo@gmail.com">
        </div>
        <div class="col-md-6">
            <input type="submit" class="btn btn-primary" value="Guardar" name="guardar">
        </div>
    </form>
    <?php

        if(isset($_POST['guardar'])){
            include('conexion.php');

            //datos de entrada
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $telefono=$_POST['telefono'];
            $fechaNacimiento=$_POST['fecha'];
            $correo=$_POST['correo'];

            //consulta base de datos
            mysqli_query($conexion, "INSERT INTO registro (id, nombre, apellido, telefono, fecha, correo) VALUES('$id', '$nombre', '$apellido', '$telefono', '$fechaNacimiento','$correo')");

            echo 'Datos guardados correctamente';
        }


    ?>
</body>
</html>