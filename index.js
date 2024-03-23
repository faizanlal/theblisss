let currentSlide = 0;

function changeSlide(n) {
  showSlide((currentSlide += n));
}

function showSlide(n) {
  let slides = document.getElementsByClassName("slide");
  if (n >= slides.length) {
    currentSlide = 0;
  } else if (n < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = n;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[currentSlide].style.display = "block";
}
// script.js

document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");
  const cardSlider = document.querySelector(".card-slider");

  cards.forEach((card, index) => {
    card.addEventListener("click", function () {
      // Remove the active class from all cards
      cards.forEach((c) => c.classList.remove("active"));
      // Add the active class to the clicked card
      card.classList.add("active");
      // Adjust the card-slider to show the clicked card
      cardSlider.style.transform = `translateX(-${index * 100}%)`;
    });
  });
});
