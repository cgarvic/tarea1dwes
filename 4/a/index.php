<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 4a: Piedra, papel, tijera, lagarto, spock</title>
</head>

<body class='bg-blue-200'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-blue-400 text-blue-400'>
            <a href='/gar_vic_car/1/index.html'>1</a> <a href='/gar_vic_car/2/index.html'>2</a> <a href='/gar_vic_car/3/a/index.php'>3a</a> <a href='/gar_vic_car/3/b/index.php'>3b</a> <a href='/gar_vic_car/4/a/index.php'>4a</a> <a href='/gar_vic_car/4/b/index.php'>4b</a> <a href='/gar_vic_car/4/c/index.php'>4c</a> <a href='/gar_vic_car/5/index.html'>5</a>
        </div>
    </nav>
    <div class='flex h-screen'>
        <div class='w-1/2 m-auto bg-white p-4 '>
            <h1 class='text-4xl m-3 text-center'>Piedra Papel Tijeras Lagarto Spock</h1>
            <p class='m-3 text-2xl text-center'>Elige una opción y pulsa Jugar:</p>
            <form class='m-3' action='resultado.php' method='post'>
                <div class='pt-6 grid grid-cols-5 gap-1'>
                    <label>
                        <input class='hidden peer' type='radio' name='opcion' value='piedra' checked />
                        <img src='img/piedra.jpg' class='px-10 rounded-full border-2 border-green-400 peer-checked:border-green-600 peer-checked:border-4' alt="piedra" />
                    </label>
                    <label>
                        <input class='hidden peer' type='radio' name='opcion' value='papel' />
                        <img src='img/papel.jpg' class='px-10 rounded-full border-2 border-yellow-300 peer-checked:border-yellow-500 peer-checked:border-4' alt="papel" />
                    </label>
                    <label>
                        <input class='hidden peer' type='radio' name='opcion' value='tijeras' />
                        <img src='img/tijeras.jpg' class='px-10 rounded-full border-2 border-red-400 peer-checked:border-red-600 peer-checked:border-4' alt="tijeras" />
                    </label>
                    <label>
                        <input class='hidden peer' type='radio' name='opcion' value='lagarto' />
                        <img src='img/lagarto.jpg' class='px-10 rounded-full border-2 border-orange-400 peer-checked:border-orange-600 peer-checked:border-4' alt="lagarto" />
                    </label>
                    <label>
                        <input class='hidden peer' type='radio' name='opcion' value='spock' />
                        <img src='img/spock.jpg' class='px-10 rounded-full border-2 border-blue-400 peer-checked:border-blue-600 peer-checked:border-4' alt="spock" />
                    </label>
                </div>
                <br />
                <div class='flex'>
                    <input class='mx-auto shadow bg-blue-500 hover:bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold p-3 my-3 rounded' type='submit' id='register' value='Jugar'>
                </div>
            </form>
        </div>
    </div>
</body>
</html>