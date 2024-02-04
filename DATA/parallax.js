// Получаем элемент с фоновым изображением
var heroSection = document.querySelector('.hero');

// Добавляем обработчик события движения мыши
window.addEventListener('mousemove', function(event) {
  // Получаем положение мыши относительно окна браузера
  var mouseX = event.clientX;
  var mouseY = event.clientY;

  // Получаем размеры окна браузера
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;

  // Вычисляем смещение для фонового изображения
  var offsetX = (mouseX - windowWidth / 2) / windowWidth * 30;
  var offsetY = ((mouseY - windowHeight / 2) / windowHeight * 30) - 50;

  // Применяем смещение к фоновому изображению
  heroSection.style.backgroundPositionX = offsetX + 'px';
  heroSection.style.backgroundPositionY = offsetY + 'px';
});