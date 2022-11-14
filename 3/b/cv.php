<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 3b: Generador de CV</title>
</head>
<?php
$error = 0;
$error_log = "";

if (!empty($_POST['nombre']) && !empty($_POST['centro']) && !empty($_POST['puesto']) && !empty($_POST['empresa']) && !empty($_POST['puesto2']) && !empty($_POST['empresa2'])) {
    $a = $_POST['nombre'];
    $g = $_POST['centro'];
    $i = $_POST['puesto'];
    $j = $_POST['empresa'];
    $q = $_POST['puesto2'];
    $r = $_POST['empresa2'];
} else {
    $error++;
    $error_log = $error_log . "No se ha definido una variable stringtext o se ha borrado el input del formulario. ";
}

if (!empty($_POST['fecnac']) && !empty($_POST['fecini']) && !empty($_POST['fecfin']) && !empty($_POST['fecini2']) && !empty($_POST['fecfin2'])) {
    if (strtotime($_POST['fecnac']) && strtotime($_POST['fecini']) && strtotime($_POST['fecfin']) && strtotime($_POST['fecini2']) && strtotime($_POST['fecfin2'])) {
        $b = date("d/m/Y", strtotime($_POST['fecnac']));
        $k = date("d/m/Y", strtotime($_POST['fecini']));
        $s = date("d/m/Y", strtotime($_POST['fecini2']));
        if ((strtotime($_POST['fecfin']) > strtotime($_POST['fecini'])) && (strtotime($_POST['fecfin2']) > strtotime($_POST['fecini2']))) {
            $l = date("d/m/Y", strtotime($_POST['fecfin']));
            $t = date("d/m/Y", strtotime($_POST['fecfin2']));
        } else {
            $error++;
            $error_log = $error_log . "La fecha de finalización no puede ser inferior a la fecha de inicio.";
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha encontrado una fecha con un formato incorrecto.";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definida una de las fechas o se ha borrado el input del formulario. ";
}

if (isset($_POST['sexo'])) {
    if ($_POST['sexo'] === 'Hombre' || $_POST['sexo'] === 'Mujer') {
        $c = $_POST['sexo'];
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de sexo del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un sexo o se ha borrado el input del formulario. ";
}

if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $d = $_POST['email'];
    } else {
        $error++;
        $error_log = $error_log . "El email no tiene un formato correcto. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un email o se ha borrado el input del formulario. ";
}


if (!empty($_POST['telefono'])) {
    if (preg_match('/^[0-9]{9}$/', $_POST['telefono'])) {
        $e = $_POST['telefono'];
    } else {
        $error++;
        $error_log = $error_log . "El teléfono no tiene un formato correcto. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un teléfono o se ha borrado el input del formulario. ";
}

if (isset($_POST['ed'])) {
    if ($_POST['ed'] === '0' || $_POST['ed'] === '1' || $_POST['ed'] === '2' || $_POST['ed'] === '3' || $_POST['ed'] === '4' || $_POST['ed'] === '5' || $_POST['ed'] === '6') {
        switch ($_POST['ed']) {
            case 0:
                $f = "Primaria";
                break;
            case 1:
                $f = "ESO";
                break;
            case 2:
                $f = "Grado medio en formación profesional";
                break;
            case 3:
                $f = "Grado superior en formación profesional";
                break;
            case 4:
                $f = "Estudios universitarios";
                break;
            case 5:
                $f = "Máster";
                break;
            case 6:
                $f = "Doctorado";
                break;
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de nivel de educación del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un nivel de educación o se ha borrado el input del formulario. ";
}

if (!empty($_POST['año'])) {
    if (!($_POST['año'] < 1900 || $_POST['año'] > 2024)) {
        $h = $_POST['año'];
    } else {
        $error++;
        $error_log = $error_log . "El año no se encuentra entre los valores permitidos. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un año de finalización de estudios o se ha borrado el input del formulario. ";
}

if (isset($_POST['es'])) {
    if ($_POST['es'] === '0' || $_POST['es'] === '1' || $_POST['es'] === '2' || $_POST['es'] === '3' || $_POST['es'] === '4') {
        switch ($_POST['es']) {
            case 0:
                $m = "";
                break;
            case 1:
                $m = "Nivel de español bajo. ";
                break;
            case 2:
                $m = "Nivel de español medio. ";
                break;
            case 3:
                $m = "Nivel de español alto. ";
                break;
            case 4:
                $m = "Nivel de español nativo. ";
                break;
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de nivel de español del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un nivel de español o se ha borrado el input del formulario. ";
}

if (isset($_POST['en'])) {
    if ($_POST['en'] === '0' || $_POST['en'] === '1' || $_POST['en'] === '2' || $_POST['en'] === '3' || $_POST['en'] === '4') {
        switch ($_POST['en']) {
            case 0:
                $n = "";
                break;
            case 1:
                $n = "Nivel de inglés bajo. ";
                break;
            case 2:
                $n = "Nivel de inglés medio. ";
                break;
            case 3:
                $n = "Nivel de inglés alto. ";
                break;
            case 4:
                $n = "Nivel de inglés nativo. ";
                break;
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de nivel de inglés del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un nivel de inglés o se ha borrado el input del formulario. ";
}

if (isset($_POST['fr'])) {
    if ($_POST['fr'] === '0' || $_POST['fr'] === '1' || $_POST['fr'] === '2' || $_POST['fr'] === '3' || $_POST['fr'] === '4') {
        switch ($_POST['fr']) {
            case 0:
                $o = "";
                break;
            case 1:
                $o = "Nivel de francés bajo.";
                break;
            case 2:
                $o = "Nivel de francés medio. ";
                break;
            case 3:
                $o = "Nivel de francés alto. ";
                break;
            case 4:
                $o = "Nivel de francés nativo. ";
                break;
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de nivel de francés del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un nivel de francés o se ha borrado el input del formulario. ";
}

if (isset($_POST['carnet'])) {
    if ($_POST['carnet'] === '0' || $_POST['carnet'] === '1' || $_POST['carnet'] === '2') {
        switch ($_POST['carnet']) {
            case 0:
                $p = "Permiso de conducción para turismos.";
                break;
            case 1:
                $p = "Permiso de conducción para motos.";
                break;
            case 2:
                $p = "Sin permiso de conducción para vehículos.";
                break;
        }
    } else {
        $error++;
        $error_log = $error_log . "Se ha alterado el valor de los carnets del formulario. ";
    }
} else {
    $error++;
    $error_log = $error_log . "No hay definido un permiso de conducción o se ha borrado el input del formulario. ";
}
?>

<body class='bg-blue-200'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-blue-400 text-blue-400'>
            <a href='/gar_vic_c/1/index.html'>1</a> <a href='/gar_vic_c/2/index.html'>2</a> <a href='/gar_vic_c/3/a/index.php'>3a</a> <a href='/gar_vic_c/3/b/index.php'>3b</a> <a href='/gar_vic_c/4/a/index.php'>4a</a> <a href='/gar_vic_c/4/b/index.php'>4b</a> <a href='/gar_vic_c/4/c/index.php'>4c</a> <a href='/gar_vic_c/5/index.html'>5</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class='w-1/2 m-auto bg-white p-4'>
            <?php if ($error === 0) { ?>
                <h1 class='text-3xl px-2 py-4'>Curriculum Vitae de <span class='text-blue-800'><?= $a ?></h1>
                <h3 class='text-xl p-2'>Sexo: <?= $c ?> - Fecha de nacimiento: <?= $b ?></h3>
                <h3 class='text-xl p-2'>Email: <?= $d ?> - Teléfono de contacto: (+34) <?= $e ?></h3>
                <h2 class='text-2xl p-2'>Formación:</h2>
                <h3 class='text-xl p-2'>Nivel formativo: <?= $f ?> obtenido en el centro <?= $g ?> en el año <?= $h ?></h3>
                <h2 class='text-2xl p-2'>Experiencia:</h2>
                <h3 class='text-xl p-2'><?= $i ?> en <?= $j ?> (<?= $k ?> - <?= $l ?>)</h3>
                <h3 class='text-xl p-2'><?= $q ?> en <?= $r ?> (<?= $s ?> - <?= $t ?>)</h3>
                <h2 class='text-2xl p-2'>Idiomas:</h2>
                <?php if (!($m === "")) {
                ?><h3 class='text-xl p-2'><?= $m ?></h3>
                <?php } ?>
                <?php if (!($n === "")) {
                ?><h3 class='text-xl p-2'><?= $n ?></h3>
                <?php } ?>
                <?php if (!($o === "")) {
                ?><h3 class='text-xl p-2'><?= $o ?></h3>
                <?php } ?>
                <h2 class='text-2xl p-2'>Otros datos de interés:</h2>
                <h3 class='text-xl p-2'><?= $p ?></h3>
            <?php } else {
            ?> <h1 class='text-3xl p-3'>Curriculum Vitae NO creado, se encontraton errores:</h1>
                <p class='p-3'>Error: <?php echo $error_log ?></p>
            <?php } ?>
        </div>
    </div>
</body>


</html>