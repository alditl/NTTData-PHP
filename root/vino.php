<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinos</title>
</head>
<?php include("header.php")
?>
<body>
<section class="vino_contenido">    


    


 
    
        <h1>Vinos</h1>
        <ul>
            <li><a href="vino.php?producto=Circus">Circus Malbec</a></li>
            <li><a href="vino.php?producto=La_Linda">La Linda Cabernet</a></li>
            <li><a href="vino.php?producto=Piel_Lobo">Cordero con Piel de Lobo Malbec</a></li>
        </ul>

    </section>

    <?php
    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'Circus':
                $nombre = 'Circus';
                $ficha_tecnica = '<p><strong>VARIETAL:</strong> Malbec.<br>
                <strong>REGIÓN DE VIÑEDOS:</strong> Agrelo, Mendoza, Argentina.<br>
                <strong>ANÁLISIS:&nbsp;</strong>Alc/ Vol: 13%<br>
                <strong>COLOR:&nbsp;</strong>Color rojo violáceo intenso.<br>
                <strong>NARIZ:&nbsp;</strong>En nariz destaca su característico varietal de frutos negros y rojos.<br>
                <strong>PALADAR:&nbsp;</strong>En boca es amable, con taninos dulces y buen final.</p>';
                $precio = "900.00";
                $img = './images/circus.jpg';
                break;
            case 'La_Linda':
                $nombre = "La Linda";
                $ficha_tecnica = '<br>De color rojo granate con tintes negruzcos.

                Se sienten aromas a blackberries, pimienta negra y mora.
                
                En boca es persistente, intenso, especiado, de taninos jóvenes resultantes de sus 3 meses de añejamiento en roble francés y americano.
                </br>';
                $precio = '$1200.00';
                $img = './images/la_linda.jpg';
                break;
            case 'Piel_Lobo':
                $nombre = "Cordero con Piel de Lobo";
                $ficha_tecnica = '<br>Un Malbec joven muy bien elaborado, diferente por su aroma y sabor a frutos maduros.
                </br><br>
                Con una acidez justa deja en boca un picor agradable con un final reforzado por su paso por madera.
                </br>';
                $precio = '$1150.00';
                $img = './images/piel_lobo.jpeg';
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