<?php
if(!isset($_POST["texto"]) || $_POST["texto"] == null){
    echo "Por favor, introduzca un texto <br>";
    echo "<a href='index.php'>pulsa aquí para volver.</a>";
    exit;
}else{
    $texto = $_POST["texto"];
}
$textoEnMinusculas = strtolower($texto);
$conMayusculas = ucwords($textoEnMinusculas);


$final = str_replace(' ', '', $conMayusculas);


echo "El texto que ha introducido era '" . $texto . "', y lo hemos convertido en:<br><h3>" . $final . "</h3>";
echo "<br><br><br><a href='index.php'>pulsa aquí para volver a probar.</a>";
?>