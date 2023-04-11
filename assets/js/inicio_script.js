const sliderWrapper = document.querySelector("#sliderWrapper");
const sliderSelection = document.querySelectorAll(".sliderCaption");
const sliderbuttons = document.querySelectorAll(".slide-button");



function goToSlide(n) {
  // use the insertAdjacentElement method to move the selected slide 1,2 or 3 to the first position
  sliderWrapper.insertAdjacentElement("afterbegin", sliderSelection[n - 1]);

  sliderbuttons.forEach((button) => {
    button.classList.remove("active");
  });
  sliderbuttons[n - 1].classList.add("active");
}

window.addEventListener("load", () => {
  goToSlide(1);
});