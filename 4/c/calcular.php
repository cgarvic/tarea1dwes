<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 4c: Informe de salud personal</title>
</head>
<?php
$error = 0;
$error_log = "";

if (isset($_POST['sexo'])) {
    if ($_POST['sexo'] === 'Hombre' || $_POST['sexo'] === 'Mujer') {
        $a = $_POST['sexo'];
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de sexo del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un sexo o se ha borrado el input del formulario. ";
}

if (
    !empty($_POST['edad']) && !empty($_POST['altura']) && !empty($_POST['peso']) &&
    filter_var($_POST['edad'], FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 130))) &&
    filter_var($_POST['altura'], FILTER_VALIDATE_INT, array("options" => array("min_range" => 20, "max_range" => 290))) &&
    filter_var($_POST['peso'], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 750)))
) {
    $b = $_POST['edad'];
    $c = $_POST['altura'];
    $d = $_POST['peso'];
} else {
    $error++;
    $error_log = $error_log . "No se ha definido alguna variable, se ha puesto un número no válido, fuera de rango o se ha borrado el input del formulario. ";
}

if ($error === 0) {
    $e = 10 * $d + 6.25 * $c - 5 * $b;
    if ($a === 'Hombre') {
        $e = $e + 5;
    } else {
        $e = $e - 161;
    }
    $f = $d / (($c / 100) * ($c / 100));
    $f = floor($f * 10) / 10;
}
?>


<body class='bg-pink-300'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-pink-500 text-pink-500'>
            <a href='/gar_vic_car/1/index.html'>1</a> <a href='/gar_vic_car/2/index.html'>2</a> <a href='/gar_vic_car/3/a/index.php'>3a</a> <a href='/gar_vic_car/3/b/index.php'>3b</a> <a href='/gar_vic_car/4/a/index.php'>4a</a> <a href='/gar_vic_car/4/b/index.php'>4b</a> <a href='/gar_vic_car/4/c/index.php'>4c</a> <a href='/gar_vic_car/5/index.html'>5</a>
        </div>
    </nav>
    <div class='flex h-screen'>
        <div class='w-1/2 m-auto bg-white p-4 '>
            <h1 class='text-3xl m-3 text-center'>Calcular IMC y TMB</h1>
            <?php if ($error === 0) {
            ?>
                <p class='m-3 text-2xl text-center'>Resultados:</p>
                <h1 class='text-xl text-center pb-3'>Su IMC es igual a <?= $f ?> y su TMB es de <?= $e ?> kcal por día.</h1>
            <?php } else {
                echo $error_log;
            } ?>
        </div>
    </div>
</body>

</html>