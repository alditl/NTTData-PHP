<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>

<body>
    <h1>Clases</h1>
    <h2>Variables y operadores</h2>

    <section>
        <h3> Cursos </h3>

        <?php
        //Variables
        $texto = "PHP Inicial";
        $unidades_curso = 1;
        $precio = 122.3;
        $fecha = "10/2/22";
        ?>
    </section>

    <section>
        <h3>Echo y Print</h3>

        <?php
        echo "<br>hola mundo</br>";

        print "<br>fua mi amor</br>";

        echo $texto

        //puedo agregar formato al hola mundo (h1 por ej) dentro del string y el servidor lo va a renderizar

        ?>
    </section>


    <section>
        <h3>Estructuras de control</h3>

        <?php
        $a = 10;
        $b = 10;
        if ($a > $b) {
            echo "a es mayor que b";
        } elseif ($a == $b) {
            echo "a es igual que b";
        } else {
            echo "a no es mayor que b";
        }
        echo "<br></br>";
        $i = "frutilla";

        switch ($i) {
            case "manzana":
                echo "i es una manzana";
                break;
            case "pera":
                echo "i es una pera";
                break;
            case "frutilla":
                echo "i es una frutilla";
                break;
            case "sandia":
                echo "i es una sandia";
                break;
            default:
                echo "ingrese una fruta válida";
        }


        

        ?>

    </section>

    <!--Constantes-->
    <?php
    define('CONSTANTE', 'Hola Mundo');
    ?>

</body>

</html>