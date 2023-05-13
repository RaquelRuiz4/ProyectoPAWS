<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/inicio.css','resources/js/script.js','resources/js/anime.min.js'])

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

    <h3 id="clientes">Nuestros clientes</h3>
    <div class="lados">
      <div class="canvasContainer">
        <canvas id="canvas" height="400px" width="500px"></canvas>
      </div>
      <div class="texto">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error harum,
          blanditiis dolores ea illo maiores soluta incidunt aut eaque delectus
          modi ducimus sit praesentium qui voluptate officiis nesciunt
          exercitationem temporibus? Nulla voluptate nihil consequatur
          exercitationem temporibus consectetur ex maxime officia fuga laborum,
          tempore quo. Aliquid nesciunt minus ipsum autem mollitia. Reiciendis
          corrupti quas maxime ratione accusamus quisquam nam ipsa aspernatur?
          Dolorum rem corrupti corporis molestiae explicabo, quibusdam harum,
          <span class="segundoTexto">
            dolorem nobis commodi sunt ab ratione ex unde. Voluptatibus nihil
            dolor omnis eum ratione modi totam animi atque, nisi, distinctio
            porro fuga? Aut ipsum vero earum, mollitia, aperiam voluptas tempore
            odit optio eligendi quo ipsam quibusdam sapiente sint, fugiat sit ab
            a placeat natus iure repellendus dolores at dolor. Exercitationem,
            excepturi voluptatum?
          </span>
        </p>
      </div>
    </div>
    <div id="contacto">
      <div class="contactoTitulo">
        <h3>Contacto</h3>
        <div id="contactoMapa">
          <iframe
            id="mapa"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.250529139749!2d-4.556651484754075!3d36.74055717996087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f1d2fe2a89c5%3A0xc7df40a25e5a2841!2sC.%20Frederick%20Terman%2C%203%2C%2029590%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1677525275941!5m2!1ses!2ses"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
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
        <footer>
          <p>PAWS Copyright 2022 ©</p>
          <div class="logos">
            <i id="f" class="fa-brands fa-facebook"></i>
            <i id="y" class="fab fa-youtube"></i>
            <i id="t" class="fab fa-twitter"></i>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
