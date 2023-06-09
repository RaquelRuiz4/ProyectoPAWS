<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/inicio.css', 'resources/js/script.js', 'resources/js/anime.min.js'])

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

    <div class="contenedor__principal">
        <div class="lados__container">
            <h3 id="clientes" class="sm:text-4xl md:text-md text-lg">Sobre nosotros</h3>
            <div class="lados">
                <div class="canvasContainer">
                    <canvas id="canvas" height="400px" width="500px"></canvas>
                </div>
                <div class="texto">
                    <p>
                        En nuestro centro veterinario canino, entendemos que tu perro
                        es más que una mascota, es un miembro valioso de tu familia.
                        Por eso, nos enorgullece ofrecer servicios de atención médica
                        de alta calidad y un cuidado excepcional para tu fiel compañero.


                        <span class="segundoTexto">
                            Nuestro equipo de veterinarios altamente capacitados y
                            amantes de los perros está dedicado a proporcionar un cuidado
                            compasivo y personalizado para cada paciente que nos visita.
                            Ya sea que necesites una consulta de rutina, vacunas, atención
                            preventiva o tratamiento médico avanzado, estamos aquí para ayudarte.
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="clientes sm:text-4xl md:text-md text-lg">
            <h2>Nuestros clientes</h2>
            <div id=galeria></div>
        </div>
        <div id="contacto">
            <div class="contactoTitulo sm:text-4xl md:text-md text-lg">
                <h3>Contacto</h3>
                <div id="contactoMapa">
                    <iframe id="mapa"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.250529139749!2d-4.556651484754075!3d36.74055717996087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f1d2fe2a89c5%3A0xc7df40a25e5a2841!2sC.%20Frederick%20Terman%2C%203%2C%2029590%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1677525275941!5m2!1ses!2ses"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <table>
                        <th>Horario</th>
                        <tr>
                            <td>Lun:</td>
                            <td>10:00–21:00</td>
                        </tr>
                        <tr>
                            <td>Mar:</td>
                            <td>10:00–21:00</td>
                        </tr>
                        <tr>
                            <td>Mié:</td>
                            <td>10:00–21:00</td>
                        </tr>
                        <tr>
                            <td>Jue:</td>
                            <td>10:00–21:00</td>
                        </tr>
                        <tr>
                            <td>Vie:</td>
                            <td>10:00–21:00</td>
                        </tr>
                        <tr>
                            <td>Sáb:</td>
                            <td>10:00–14:00</td>
                        </tr>
                        <tr>
                            <td>Dom:</td>
                            <td>Cerrado</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        <footer>
            <p>PAWS Copyright 2022 ©</p>
            <div class="logos">
                <i id="f" class="fa-brands fa-facebook"></i>
                <i id="y" class="fab fa-youtube"></i>
                <i id="t" class="fab fa-twitter"></i>
            </div>
        </footer>
    </div>
</body>

</html>
