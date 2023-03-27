const sliderWrapper = document.querySelector("#sliderWrapper");
let sliderSelection = document.querySelectorAll(".sliderCaption");
let sliderSelectionLast = sliderSelection[sliderSelection.length -1];

const btnNext = document.querySelector("#btnNext");
const btnLeft = document.querySelector("#btnPrev");

sliderWrapper.insertAdjacentElement('afterbegin', sliderSelectionLast);