<?php
$colorSeleccionado = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['color'])) {
        $colorSeleccionado = $_POST['color'];
    }
}
$colorFondo = '';
if ($colorSeleccionado == 'rojo') {
    $colorFondo = '#ffdddd';
} elseif ($colorSeleccionado == 'azul') {
    $colorFondo = '#ddeeff';
} elseif ($colorSeleccionado == 'verde') {
    $colorFondo = '#ddffdd';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de RadioButton</title>
</head>
<body style="background-color: <?php echo $colorFondo; ?>;">
    <h2>Elige tu color favorito:</h2>
   <form method="post">
    <label>
        <input type="radio" name="color" value="rojo" <?php if($colorSeleccionado == 'rojo') echo 'checked'; ?>>
        Rojo
    </label>
    <label>
        <input type="radio" name="color" value="azul" <?php if($colorSeleccionado == 'azul') echo 'checked'; ?>>
        Azul
    </label>
    <label>
        <input type="radio" name="color" value="verde" <?php if($colorSeleccionado == 'verde') echo 'checked'; ?>>
        Verde
    </label>
    <button type="submit">Enviar</button>
</form>
    <?php
    if ($colorSeleccionado) {
        echo "<p>Color seleccionado: <strong>" . htmlspecialchars($colorSeleccionado) . "</strong></p>";
    }
    ?>
</body>
</html>
<?php
if ($colorSeleccionado) {
    echo "<p>Color seleccionado: <strong>" . htmlspecialchars($colorSeleccionado) . "</strong></p>";
}
?>

<?php
/* Inicia el bloque PHP */
/* Crea una variable vacía para guardar el color seleccionado */
/* Verifica si el formulario fue enviado por método POST */
/* Revisa si el usuario seleccionó un color */
/* Guarda el color elegido en la variable */
/* Fin del if que revisa si hay color seleccionado */
/* Fin del if que revisa el método POST */
/* Cierra el bloque PHP */