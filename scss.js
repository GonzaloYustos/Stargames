let index = 0;
const images = document.querySelectorAll(".slider-container img");

function changeImage() {
  images[index].style.opacity = 0;
  index = (index + 1) % images.length;
  images[index].style.opacity = 1;
}

setInterval(changeImage, 3000);