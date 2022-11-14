<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ejercicio 3b: Generador CV</title>
</head>

<body class='bg-blue-200'>
    <nav class='flex w-screen'>
        <div class='mx-auto bg-white px-8 py-2 text-center text-xl font-bold space-x-6 rounded-3xl border-4 border-blue-400 text-blue-400 mb-1'>
            <a href='/gar_vic_c/1/index.html'>1</a> <a href='/gar_vic_c/2/index.html'>2</a> <a href='/gar_vic_c/3/a/index.php'>3a</a> <a href='/gar_vic_c/3/b/index.php'>3b</a> <a href='/gar_vic_c/4/a/index.php'>4a</a> <a href='/gar_vic_c/4/b/index.php'>4b</a> <a href='/gar_vic_c/4/c/index.php'>4c</a> <a href='/gar_vic_c/5/index.html'>5</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class='w-1/2 m-auto bg-white p-4'>
            <h1 class='text-3xl m-3'>Generador de Curriculum Vitae</h1>
            <p class='m-3'>Rellene todos los campos y pulse Enviar:</p>
            <form class='m-3' action='cv.php' method='post'>
                <div class='my-3 border-2 p-2'>
                    Datos de contacto: <br />
                    <br />
                    Nombre: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='nombre' required /><br />
                    Fecha de nacimiento: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='date' name='fecnac' required /><br />
                    <div class='my-3'>
                        Sexo: <input class='w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2' type='radio' name='sexo' value='Hombre' checked /> Hombre
                        <input class='w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2' type='radio' name='sexo' value='Mujer' /> Mujer <br />
                    </div>
                    Email de contacto: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='email' name='email' required /><br />
                    Teléfono: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='tel' name='telefono' pattern='[0-9]{9}' required /><br />
                </div>
                <div class='my-3 border-2 p-2'>
                    Formación: <br />
                    Nivel educativo:
                    <input type='radio' name='ed' value='0' checked />Primaria
                    <input type='radio' name='ed' value='1' />ESO
                    <input type='radio' name='ed' value='2' />FP 1
                    <input type='radio' name='ed' value='3' />FP 2
                    <input type='radio' name='ed' value='4' />Estudios Universitarios
                    <input type='radio' name='ed' value='5' />Máster
                    <input type='radio' name='ed' value='6' />Doctorado <br />
                    Centro de estudios: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='centro' required /><br />
                    Año de finalización: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='number' name='año' min='1900' max='2024' placeholder='1990' required /><br />
                </div>
                <div class='my-3 border-2 p-2'>
                    Experiencia de trabajo 1: <br />
                    Puesto: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='puesto' required /><br />
                    Empresa: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='empresa' required /><br />
                    Fecha de inicio: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='date' name='fecini' required /><br />
                    Fecha de finalización: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='date' name='fecfin' required /><br />
                </div>
                <div class='my-3 border-2 p-2'>
                    Experiencia de trabajo 2: <br />
                    Puesto: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='puesto2' required /><br />
                    Empresa: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='empresa2' required /><br />
                    Fecha de inicio: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='date' name='fecini2' required /><br />
                    Fecha de finalización: <input class='shadow appearance-none border w-full p-2 my-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='date' name='fecfin2' required /><br />
                </div>
                <div class='my-3 border-2 p-2'>
                    Conocimientos de idiomas: <br />
                    Español:
                    <input type='radio' name='es' value='0' title='nulo' />Nulo
                    <input type='radio' name='es' value='1' title='bajo' />Bajo
                    <input type='radio' name='es' value='2' title='medio' />Medio
                    <input type='radio' name='es' value='3' title='alto' />Alto
                    <input type='radio' name='es' value='4' title='nativo' checked />Nativo <br />
                    Inglés:
                    <input type='radio' name='en' value='0' title='nulo' checked />Nulo
                    <input type='radio' name='en' value='1' title='bajo' />Bajo
                    <input type='radio' name='en' value='2' title='medio' />Medio
                    <input type='radio' name='en' value='3' title='alto' />Alto
                    <input type='radio' name='en' value='4' title='nativo' />Nativo <br />
                    Francés:
                    <input type='radio' name='fr' value='0' title='nulo' checked />Nulo
                    <input type='radio' name='fr' value='1' title='bajo' />Bajo
                    <input type='radio' name='fr' value='2' title='medio' />Medio
                    <input type='radio' name='fr' value='3' title='alto' />Alto
                    <input type='radio' name='fr' value='4' title='nativo' />Nativo <br />
                </div>
                <div class='my-3 border-2 p-2'>
                    Carnet de conducir:
                    <input type='radio' name='carnet' value='0' title='coche' /> Permiso de Turismo
                    <input type='radio' name='carnet' value='1' title='moto' /> Permiso de Moto
                    <input type='radio' name='carnet' value='2' title='ninguno' checked /> Ninguno
                    <br />
                </div>
                <input class='shadow bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold p-3 my-3 rounded' type='submit' id='register' title='Enviar'>
            </form>
        </div>
    </div>
</body>

</html>