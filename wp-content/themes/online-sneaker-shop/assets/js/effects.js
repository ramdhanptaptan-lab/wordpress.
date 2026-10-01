//Scroll Animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add('animations-show-item');
        observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('animations-show-item');
      }
    });
  });
  
  const hiddenElements = document.querySelectorAll('.animations-hidden-item');
  hiddenElements.forEach((el) => observer.observe(el));

document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".slide-item");
  const prevBtn = document.querySelector(".prev-slide-btn");
  const nextBtn = document.querySelector(".next-slide-btn");
  const dotsContainer = document.querySelector(".slider-dots"); // container for dots

  if (!slides.length || !prevBtn || !nextBtn || !dotsContainer) {
    console.warn("Slides, buttons or dots container not found");
    return;
  }

  let currentIndex = 0;

  // Create dots dynamically based on number of slides
  slides.forEach((_, i) => {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    dot.dataset.index = i;
    dotsContainer.appendChild(dot);

    // Click on dot jumps to that slide
    dot.addEventListener("click", () => {
      currentIndex = i;
      online_sneaker_shop_showSlide(currentIndex);
    });
  });

  const dots = dotsContainer.querySelectorAll(".dot");

  function online_sneaker_shop_showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = i === index ? "block" : "none";
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });

    const prevIndex = (index - 1 + slides.length) % slides.length;
    const nextIndex = (index + 1) % slides.length;

    const prevImg = slides[prevIndex].querySelector("img");
    const nextImg = slides[nextIndex].querySelector("img");

    if (prevImg) {
      prevBtn.style.backgroundImage = `url('${prevImg.src}')`;
      prevBtn.style.backgroundSize = 'cover';
      prevBtn.style.backgroundPosition = 'center';
      prevBtn.style.color = 'white';
    }

    if (nextImg) {
      nextBtn.style.backgroundImage = `url('${nextImg.src}')`;
      nextBtn.style.backgroundSize = 'cover';
      nextBtn.style.backgroundPosition = 'center';
      nextBtn.style.color = 'white';
    }
  }

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    online_sneaker_shop_showSlide(currentIndex);
  });

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % slides.length;
    online_sneaker_shop_showSlide(currentIndex);
  });

  online_sneaker_shop_showSlide(currentIndex);
});
