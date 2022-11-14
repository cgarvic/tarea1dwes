<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 4a: Piedra, papel, tijera, lagarto, spock</title>
</head>

<?php
$error = "";

if (!empty($_POST['opcion']) && ($_POST['opcion'] === 'papel' || $_POST['opcion'] === 'tijeras' || $_POST['opcion'] === 'piedra' || $_POST['opcion'] === 'spock' || $_POST['opcion'] === 'lagarto')) {
    $a = $_POST['opcion'];
    $b = rand(0, 4);
    switch ($b) {
        case 0:
            $b = 'papel';
            break;
        case 1:
            $b = 'tijeras';
            break;
        case 2:
            $b = 'piedra';
            break;
        case 3:
            $b = 'spock';
            break;
        case 4:
            $b = 'lagarto';
            break;
    }
    if ($a === 'papel') {
        if (($b === 'piedra') || ($b === 'spock')) {
            $c = '¡Ganaste!';
        } elseif ($b === 'papel') {
            $c = '¡Empataste!';
        } else {
            $c = '¡Perdiste!';
        }
    } elseif ($a === 'tijeras') {
        if (($b === 'papel') || ($b === 'lagarto')) {
            $c = '¡Ganaste!';
        } elseif ($b === 'tijeras') {
            $c = '¡Empataste!';
        } else {
            $c = '¡Perdiste!';
        }
    } elseif ($a === 'piedra') {
        if (($b === 'tijeras') || ($b === 'lagarto')) {
            $c = '¡Ganaste!';
        } elseif ($b === 'piedra') {
            $c = '¡Empataste!';
        } else {
            $c = '¡Perdiste!';
        }
    } elseif ($a === 'spock') {
        if (($b === 'piedra') || ($b === 'tijeras')) {
            $c = '¡Ganaste!';
        } elseif ($b === 'spock') {
            $c = '¡Empataste!';
        } else {
            $c = '¡Perdiste!';
        }
    } else {
        if (($b === 'papel') || ($b === 'spock')) {
            $c = '¡Ganaste!';
        } elseif ($b === 'lagarto') {
            $c = '¡Empataste!';
        } else {
            $c = '¡Perdiste!';
        }
    }
} else {
    $error = $error . "ERROR: Se ha alterado el formulario. ";
} ?>

<body class='bg-blue-200'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-blue-400 text-blue-400'>
            <a href='/gar_vic_c/1/index.html'>1</a> <a href='/gar_vic_c/2/index.html'>2</a> <a href='/gar_vic_c/3/a/index.php'>3a</a> <a href='/gar_vic_c/3/b/index.php'>3b</a> <a href='/gar_vic_c/4/a/index.php'>4a</a> <a href='/gar_vic_c/4/b/index.php'>4b</a> <a href='/gar_vic_c/4/c/index.php'>4c</a> <a href='/gar_vic_c/5/index.html'>5</a>
        </div>
    </nav>
    <div class='flex h-screen'>
        <div class='w-1/2 m-auto bg-white p-4 '>
            <h1 class='text-4xl m-3 text-center'>Piedra Papel Tijeras Lagarto Spock</h1>
            <?php if ($error === "") {
            ?>
                <p class='m-3 text-2xl text-center'>Resultados:</p>
                <br />
                <h1 class='text-3xl text-center p-3'>¡Elegiste <?= $a ?> y la máquina eligió <?= $b ?>!</h1>
                <h1 class='text-3xl text-center p-3'><?= $c ?></h1>
                <div class='flex'>
                    <a class='text-2xl mx-auto py-6 text-blue-600' href='index.php'>Volver a Jugar</a>
                </div>
            <?php } else {
                echo $error;
            } ?>
        </div>
    </div>
</body>

</html>