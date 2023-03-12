<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/inicio.css'])
</head>

<body>



    <x-app-layout>


        <div class="seccion video">
            <h1 class="text-center w-100 title">Centro veterinario PAWS</h1>
            <video height="100%" autoplay muted loop>
                <source src=".././perro.mp4" type="video/mp4" />
                Tu navegador no soporta este video.
            </video>
            <div class="capa"></div>
        </div>
    </x-app-layout>

</body>

</html>