<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 3a: Formulario sencillo</title>
</head>

<body class='bg-green-500'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-green-600 text-green-600'>
            <a href='/gar_vic_c/1/index.html'>1</a> <a href='/gar_vic_c/2/index.html'>2</a> <a href='/gar_vic_c/3/a/index.php'>3a</a> <a href='/gar_vic_c/3/b/index.php'>3b</a> <a href='/gar_vic_c/4/a/index.php'>4a</a> <a href='/gar_vic_c/4/b/index.php'>4b</a> <a href='/gar_vic_c/4/c/index.php'>4c</a> <a href='/gar_vic_c/5/index.html'>5</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class='w-1/4 m-auto bg-white p-4'>
            <h1 class='text-3xl m-3'>Formulario sencillo</h1>
            <p class='m-3'>Rellene los campos y pulse Enviar:</p>
            <form class='p-3' action='usuario.php' method='post'>
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='nombre' placeholder='Nombre y apellidos' required /><br />
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='email' name='email' placeholder='Correo electrónico' required /><br />
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='tel' name='telefono' placeholder='Teléfono (opcional)' pattern='[0-9]{9}' /><br />
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='url' name='url' placeholder='Sitio web (opcional)' /><br />
                <textarea class='resize-none shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' name='consulta' rows='4' cols='50' placeholder='Escriba su consulta aquí' required></textarea><br />
                <input class='shadow bg-green-500 focus:shadow-outline focus:outline-none text-white font-bold w-full p-3 my-3 rounded' type='submit' title='Enviar' /><br />
            </form>
        </div>
    </div>
</body>

</html>