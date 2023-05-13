const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
const temaSelector = document.getElementById("tema");

// Iconos de facebook, youtube e instagram

const f = document.getElementById("f");
const y = document.getElementById("y");
const t = document.getElementById("t");
const gallo = document.getElementById("gallo");
const grillo = document.getElementById("grillo");
// Array de imágenes para Canvas

const images = [
  "images/imagen/imagen1.jpg",
  "images/imagen/imagen2.jpg",
  "images/imagen/imagen3.jpg",
  "images/imagen/imagen4.jpg",
  "images/imagen/imagen5.jpg",
];

let currentIndex = 0;

function drawImage() {
  const image = new Image();
  image.src = images[currentIndex];
  console.log(images)
  image.onload = () => {
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
  };
}

drawImage();

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  drawImage();
}

setInterval(nextImage, 5000);

const moonPath =
  "M16 27.5C16 42.6878 27.5 52.5 27.5 55C12.3122 55 0 42.6878 0 27.5C0 12.3122 12.3122 0 27.5 0C27.5 0 16 12.3122 16 27.5Z";
const sunPath =
  "M55 27.5C55 42.6878 42.6878 55 27.5 55C12.3122 55 0 42.6878 0 27.5C0 12.3122 12.3122 0 27.5 0C42.6878 0 55 12.3122 55 27.5Z";

const darkMode = document.querySelector("#darkMode");

let activo = false;

darkMode.addEventListener("click", () => {
  const timeline = anime.timeline({
    duration: 300,
    easing: "easeOutExpo",
  });

  timeline
    .add({
      targets: ".sun",
      d: [{ value: activo ? sunPath : moonPath }],
    })
    .add(
      {
        targets: "#darkMode",
        rotate: activo ? 0 : 350,
      },
      "-= 180"
    )
    .add(
      {
        targets: "section",
        
      },
      "-= 180"
    );
  activo = !activo;

  if (tema.getAttribute("href") == "lightStyle.css") {
    tema.href = "darkStyle.css";
    f.style.color = "white";
    y.style.color = "white";
    t.style.color = "white";
    grillo.play();
   
  } else {
    tema.href = "lightStyle.css";
    f.style.color = "black";
    y.style.color = "black";
    t.style.color = "black";
    gallo.play();
  }
});
