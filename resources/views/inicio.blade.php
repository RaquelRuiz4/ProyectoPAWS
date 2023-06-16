<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/inicio.css', 'resources/js/script.js', 'resources/js/anime.min.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <x-app-layout>
        <div class="seccion video">
            <h1 class="tituloInicio title">Veterinary <br> Center <br> PAWS</h1>
            <img src="{{ asset('images/imagen/perrolanding.jpg') }}" alt="Dalmatian" width="100%" height="50%">
        </div>
    </x-app-layout>

    <div class="contenedor__principal">
        <div class="lados__container">
            <h3 id="clientes" class="sm:text-4xl md:text-md text-lg">About Us</h3>
            <div class="lados">
                <div class="canvasContainer">
                    <canvas id="canvas" height="400px" width="500px"></canvas>
                </div>
                <div class="texto">
                    <p>
                        At our canine veterinary center, we understand that your dog
                        is more than a pet, they are a valuable member of your family.
                        That's why we take pride in offering high-quality medical care
                        and exceptional treatment for your loyal companion.


                        <span class="segundoTexto">
                            Our team of highly trained and dog-loving veterinarians is dedicated
                            to providing compassionate and personalized care for every patient
                            that visits us. Whether you need a routine consultation, vaccinations,
                            preventive care, or advanced medical treatment, we are here to help.
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="clientes sm:text-4xl md:text-md text-lg">
            <h2>Our Clients</h2>
            <div id=galeria></div>
        </div>
        <div id="contacto">
            <div class="contactoTitulo sm:text-4xl md:text-md text-lg">
                <h3>Contact</h3>
                <div id="contactoMapa">
                    <iframe id="mapa"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.250529139749!2d-4.556651484754075!3d36.74055717996087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f1d2fe2a89c5%3A0xc7df40a25e5a2841!2sC.%20Frederick%20Terman%2C%203%2C%2029590%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1677525275941!5m2!1ses!2ses"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <table>
                        <th>Opening Hours</th>
                        <tr>
                            <td>Mon:</td>
                            <td>10:00 AM – 9:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tue:</td>
                            <td>10:00 AM – 9:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wed:</td>
                            <td>10:00 AM – 9:00 PM</td>
                        </tr>
                        <tr>
                            <td>Thu:</td>
                            <td>10:00 AM – 9:00 PM</td>
                        </tr>
                        <tr>
                            <td>Fri:</td>
                            <td>10:00 AM – 9:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sat:</td>
                            <td>10:00 AM – 2:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sun:</td>
                            <td>Closed</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        <footer>
            <img class="footer_perro" src="{{ asset('images/imagen/dalmata.jpg') }}" alt="Dalmatian">

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
