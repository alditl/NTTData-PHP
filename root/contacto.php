<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<?php include("header.php")
?>

<body>
    <h2 class="text-center fst-italic">DEJANOS TU CONSULTA AQUÍ:</h2>



    <div>
        <form action="enviar_consulta.php" method="POST">
            <div class="mb-3">

                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                <input class="form-control" type="text" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value = "Enviar consulta">Enviar</button>
        </form>




        <?php
        if (isset($_GET['e'])) {
            echo "<h5> Mensaje enviado con éxito </h5>";
        }

        ?>

    </div>



</body>

</html>