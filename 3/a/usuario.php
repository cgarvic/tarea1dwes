<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 3a: Consulta</title>
</head>
<?php
$error = 0;
$error_log = "";

if (!empty($_POST['nombre'])) {
    $a = $_POST['nombre'];
} else {
    $error++;
    $error_log = $error_log . "No hay definido un nombre o se ha borrado el input del formulario. ";
}

if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $b = $_POST['email'];
    } else {
        $error++;
        $error_log = $error_log . "El email no tiene un formato correcto. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un email o se ha borrado el input del formulario. ";
}

if (isset($_POST['telefono'])) {
    if (!empty($_POST['telefono'])) {
        if (preg_match('/^[0-9]{9}$/', $_POST['telefono'])) {
            $c = $_POST['telefono'];
        } else {
            $error++;
            $error_log = $error_log . "El teléfono no tiene un formato correcto. ";
        }
    } else {
        $c = 0;
    }
} else {
    $error++;
    $error_log = $error_log . "Se ha borrado el input del formulario... ";
}

if (isset($_POST['url'])) {
    if (!empty($_POST['url'])) {
        if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
            $d = $_POST['url'];
        } else {
            $error++;
            $error_log = $error_log . "El sitio web no tiene un formato correcto. ";
        }
    } else {
        $d = 0;
    }
} else {
    $error++;
    $error_log = $error_log . "Se ha borrado el input del formulario... ";
}

if (!empty($_POST['consulta'])) {
    $e = $_POST['consulta'];
} else {
    $error++;
    $error_log = $error_log . "No hay definida una consulta o se ha borrado el input del formulario. ";
}

?>


<body class='bg-green-500'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-green-600 text-green-600'>
            <a href='/gar_vic_c/1/index.html'>1</a> <a href='/gar_vic_c/2/index.html'>2</a> <a href='/gar_vic_c/3/a/index.php'>3a</a> <a href='/gar_vic_c/3/b/index.php'>3b</a> <a href='/gar_vic_c/4/a/index.php'>4a</a> <a href='/gar_vic_c/4/b/index.php'>4b</a> <a href='/gar_vic_c/4/c/index.php'>4c</a> <a href='/gar_vic_c/5/index.html'>5</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class='w-1/2 m-auto bg-white p-4'>
            <?php if ($error === 0) { ?>
                <h1 class='text-3xl p-3'>Consulta creada:</h1>
                <p class='px-3'>Consulta creada por: <?php
                                                        echo $a; ?> (<em>
                        <?php echo $b; ?>
                    </em>).
                </p>
                <?php if ($c != 0) { ?>
                    <p class='px-3'>Teléfono de contacto: <?php echo $c; ?></p>
                <?php } ?>
                <?php if ($d != 0) { ?>
                    <p class='px-3'>Sitio web: <?php echo $d; ?></p>
                <?php } ?>
                <p class='p-3'>Su consulta es la siguiente: <?php
                                                            echo $e; ?>.
                </p>
            <?php } else {
            ?> <h1 class='text-3xl p-3'>Consulta NO creada, se encontraton errores:</h1>
                <p class='p-3'>Error: <?php echo $error_log ?></p>
            <?php } ?>
        </div>
    </div>
</body>

</html>