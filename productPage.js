

// Generate Other Products - [START]

const otherProducts = document.querySelector('.testing');

const displayOtherProducts = function() {
  const html = `<img src="/images/productTest.jpg" class=" w-[175px] h-auto">`;

  for(let i = 0; i < 10; i++) {
    otherProducts.insertAdjacentHTML('beforeend', html);
  }
}();

// TO-DO:
// Implement displaying random products instead of fixed
// Generate Other Products - [END]

// Makes Slider Work (Carousel) - [START]

const gap = 16;
const carousel = document.getElementById("carousel"),
      content = document.getElementById("content"),
      next = document.getElementById("next"),
      prev = document.getElementById("prev");


const carouselFunc = function(carousel, content, next, prev) {
    next.addEventListener("click", e => {
        carousel.scrollBy(width + gap, 0);
        if (carousel.scrollWidth !== 0) {
          prev.style.display = "flex";
        }
        if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
          next.style.display = "none";
        }
      });
      prev.addEventListener("click", e => {
        carousel.scrollBy(-(width + gap), 0);
        if (carousel.scrollLeft - width - gap <= 0) {
          prev.style.display = "none";
        }
        if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
          next.style.display = "flex";
        }
      });
      
      let width = carousel.offsetWidth;
      window.addEventListener("resize", e => (width = carousel.offsetWidth));
}(carousel, content, next, prev);


// Makes Slider Work (Carousel) - [END]