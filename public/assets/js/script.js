const carousel = document.querySelector(".carousel");
const prevButton = document.querySelector(".carousel-btn.prev");
const nextButton = document.querySelector(".carousel-btn.next");

let offset = 0;

prevButton.addEventListener("click", () => {
    offset = Math.min(offset + 100, 0);
    carousel.style.transform = `translateX(${offset}%)`;
});

nextButton.addEventListener("click", () => {
    offset = Math.max(offset - 100, -400); // Adjust based on the total items
    carousel.style.transform = `translateX(${offset}%)`;
});
