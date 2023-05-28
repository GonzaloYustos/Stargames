const slider = document.querySelector('.slider');
const sliderWidth = slider.clientWidth;
let position = 0;

function moveSlider(direction) {
  if (direction === 'left') {
    position += sliderWidth;
  } else {
    position -= sliderWidth;
  }
  slider.style.transform = `translateX(${position}px)`;
}

setInterval(() => {
  moveSlider('left');
}, 3000);