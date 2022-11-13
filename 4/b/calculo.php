<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 4b: Área y perímetro de un cuadrado</title>
</head>
<?php
$error = "";

if (!empty($_POST['lado']) && filter_var($_POST['lado'], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 999999999999)))) {
    $a = $_POST['lado'];
    $b = $a * $a;
    $c = $a * 4;
} else {
    $error = $error . "No se ha definido la variable, se ha puesto un número negativo, cero o se ha borrado el input del formulario. ";
}

?>


<body class='bg-red-900'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-red-700 text-red-900'>
            <a href='/gar_vic_car/1/index.html'>1</a> <a href='/gar_vic_car/2/index.html'>2</a> <a href='/gar_vic_car/3/a/index.php'>3a</a> <a href='/gar_vic_car/3/b/index.php'>3b</a> <a href='/gar_vic_car/4/a/index.php'>4a</a> <a href='/gar_vic_car/4/b/index.php'>4b</a> <a href='/gar_vic_car/4/c/index.php'>4c</a> <a href='/gar_vic_car/5/index.html'>5</a>
        </div>
    </nav>
    <div class='flex h-screen'>
        <div class='w-1/2 m-auto bg-white p-4 '>
            <h1 class='text-3xl m-3 text-center'>Calcular área y perímetro</h1>
            <?php if ($error === "") {
            ?>
                <p class='m-3 text-2xl text-center'>Resultados:</p>
                <br />
                <h1 class='text-xl text-center p-3'>Para un cuadrado con lados de <?= $a ?> mm su área será de <?= $b ?> mm y su perímetro de <?= $c ?> mm.</h1>
            <?php } else {
                echo $error;
            } ?>
        </div>
    </div>
</body>
</html>