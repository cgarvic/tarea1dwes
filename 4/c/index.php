<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 4c: Informe de salud personal</title>
</head>

<body class='bg-pink-300'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-pink-500 text-pink-500'>
            <a href='/gar_vic_car/1/index.html'>1</a> <a href='/gar_vic_car/2/index.html'>2</a> <a href='/gar_vic_car/3/a/index.php'>3a</a> <a href='/gar_vic_car/3/b/index.php'>3b</a> <a href='/gar_vic_car/4/a/index.php'>4a</a> <a href='/gar_vic_car/4/b/index.php'>4b</a> <a href='/gar_vic_car/4/c/index.php'>4c</a> <a href='/gar_vic_car/5/index.html'>5</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class='w-1/3 m-auto bg-white p-4'>
            <h1 class='text-3xl m-3 text-gray-700'>Calcular IMC y TMB</h1>
            <p class='m-3 text-gray-700'>Introduzca sus datos y pulse Calcular:</p>
            <form class='p-3' action='calcular.php' method='post'>
                <div class='my-3'>
                    Sexo: <input class='w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2' type='radio' name='sexo' value='Hombre' checked /> Hombre
                    <input class='w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2' type='radio' name='sexo' value='Mujer' /> Mujer <br />
                </div>
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='number' name='edad' placeholder='edad max: 130' required /><br />
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='number' name='altura' placeholder='altura (cm) min: 20, max: 290' required /><br />
                <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='number' name='peso' placeholder='peso (kg) min: 1, max: 750' required /><br />
                <input class='shadow bg-pink-900 focus:shadow-outline focus:outline-none text-white font-bold w-full p-3 my-3 rounded' type='submit' value='Calcular' /><br />
            </form>
        </div>
    </div>
</body>

</html>