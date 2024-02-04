
window.addEventListener('scroll', function() {
  var block = document.querySelector('.footer');
  var scrollPosition = window.scrollY || window.pageYOffset;
  var blockPosition = block.offsetTop;

  if (scrollPosition >= blockPosition) {
    block.style.position = 'fixed';
    block.style.bottom = '0';
  } else {
    block.style.position = 'static';
  }
});