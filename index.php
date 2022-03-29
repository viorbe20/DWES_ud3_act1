<?php

$ejercicios = array (
    array ('id'=>1, 'titulo'=>'Número aleatorio', 'descripcion'=>'Escribe un script que muestre al usuario un número aleatorio comprendido entre dos números que han sido solicitados previamente mediante un formulario', 'enlace'=>'ej1.php', 'github'=>'https://github.com/viorbe20/DWES_ra3/blob/main/ej1.php'),
    array ('id'=>2, 'titulo'=>'Reescritura de contraseñas', 'descripcion'=>'Escribe un script que muestre un formulario con dos inputs de tipo password y verifique en el servidor si las entradas coinciden', 'enlace'=>'ej2.php', 'github'=>'https://github.com/viorbe20/DWES_ra3/blob/main/ej2.php'),
    array ('id'=>3, 'titulo'=>'Operaciones aritméticas', 'descripcion'=>'Escribe un script que muestre al usuario un formulario con una operación aritmetica básica, generada aleatoriamente. Una vez completado el formulario, el script indicará si la operación se realizó correctamente', 'enlace'=>'ej3.php', 'github'=>'https://github.com/viorbe20/DWES_ra3/blob/main/ej3.php'),
    array ('id'=>4, 'titulo'=>'Encuesta', 'descripcion'=>'Escribe un script que muestre un formulario que permita la votación de 10 items(items1, items2...) mediante un radio button de 1 a 5. La respuesta al formulario mostrará el item mejor valorado.', 'enlace'=>'ej4.php', 'github'=>'https://github.com/viorbe20/DWES_ra3/blob/main/ej4.php'),
    array ('id'=>5, 'titulo'=>'Figuras geométricas', 'descripcion'=>'Escribe un script que muestre una figura geométrica utilizando el formato svg. Para ello el script mostrará un formulario con un radio buton con las figuras disponibles: círculo, rectángulo, cuadrado y un cuadro de texto para seleccionar el color. En función de la figura elegida, el script solicitará los datos necesarios para su visualización.', 'enlace'=>'ej5.php', 'github'=>'https://github.com/viorbe20/DWES_ra3/blob/main/ej5.php'),
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virginia Ordoño Bernier</title>
</head>
<body>
    <?php 
    foreach ($ejercicios as $key => $value) {
        echo '<a href="' . $value['enlace'] . '">' . $value['id'] . '.' . $value['titulo'] .'</a>' . '<br>' . $value['descripcion'] . '<a href="' . $value['github'] . '">' . '<br><br>';
    }
    ?>
</body>
</html>