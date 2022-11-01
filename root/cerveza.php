<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervezas</title>
</head>
<?php include("header.php")
?>
<body>
<section class="cerveza_contenido">    


    


 
    
        <h1>Cervezas</h1>
        <ul>
            <li><a href="cerveza.php?producto=A_IPA">Andes IPA</a></li>
            <li><a href="cerveza.php?producto=A_Roja">Andes Roja</a></li>
            <li><a href="cerveza.php?producto=A_Rubia">Andes Rubia</a></li>
        </ul>

    </section>

    <?php
    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'A_IPA':
                $nombre = 'Andes IPA';
                $ficha_tecnica = '<br>Andes Origen IPA es una cerveza rubia de amargor moderado con un aroma intenso a lúpulo.</br>';
                $precio = "$193.00";
                $img = './images/A_IPA.jpg';
                break;
            case 'A_Roja':
                $nombre = "Andes Roja";
                $ficha_tecnica = '<br>Andes Origen Roja es una cerveza de receta mendocina. Se recomienda servir en copa. Está hecha con pura malta tostada a fuego lento, que ofrece colores y texturas bien distintivas.</br>';
                $precio = '$185.00';
                $img = './images/A_Roja.jpeg';
                break;
            case 'A_Rubia':
                $nombre = "Andes Rubia";
                $ficha_tecnica = '<br>Andes Origen Rubia posee un sabor a malta, leve aroma a lupulo y a cereal, cuerpo medio, refrescante.</br>';
                $precio = '$185.00';
                $img = './images/A_Rubia.jpg';
                break;
        }
    }
    ?>

    <div class="producto_descripcion">
        <h4> <?php echo $nombre; ?></h4>
        <h5> <?php echo $ficha_tecnica; ?></h5>
        <h6> <?php echo $precio; ?></h6>
        <div class="card" style="width: 18rem;"">
            <img src="<?php echo $img; ?>" class="img-fluid" alt="foto cerveza">
        </div>

    </div>
</body>

</html>