const sliderWrapper = document.querySelector("#sliderWrapper");
let sliderSelection = document.querySelectorAll(".sliderCaption");
let sliderSelectionLast = sliderSelection[sliderSelection.length - 1];

const btnNext = document.querySelector("#btnNext");
const btnPrev = document.querySelector("#btnPrev");

// sliderWrapper.insertAdjacentElement('afterbegin', sliderSelectionLast);

function effect() {
  const sliderHead = document.querySelectorAll(".sliderHead");
  sliderHead.forEach(function (sliderHead) {
    sliderHead.animate(
      [
        { opacity: "1", transform: "translateY(0)" },
        { opacity: "0", transform: "translateY(-100%)" },
        { opacity: "1", transform: "translateY(0)" },
      ],
      {
        duration: 1000,
        iterations: 1,
        fill: "forwards",
      }
    );
  });
}

function Next() {
  let sliderSectionFirst = document.querySelectorAll(".sliderCaption")[0];
  let sliderSectionNxt = document.querySelectorAll(".sliderCaption")[1];
  sliderWrapper.insertAdjacentElement("beforeend", sliderSectionFirst);
  sliderSectionFirst.animate(
    [{ transform: "translateX(-200%)" }, { transform: "translateX(-300%)" }],
    {
      duration: 1000,
      fill: "forwards",
    }
  );
  sliderSectionNxt.animate(
    [{ transform: "translateX(100%)" }, { transform: "translateX(0)" }],
    {
      duration: 1000,
      fill: "forwards",
    }
  );
  effect();
}

function Prev() {
  let sliderSelection = document.querySelectorAll(".sliderCaption");
  let sliderSelectionLast = sliderSelection[sliderSelection.length - 1];
  let sliderSelectionact = sliderSelection[0];
  sliderWrapper.insertAdjacentElement("afterbegin", sliderSelectionLast);

  sliderSelectionLast.animate(
    [{ transform: "translateX(-100%)" }, { transform: "translateX(0)" }],
    {
      duration: 1000,
      fill: "forwards",
    }
  );

  sliderSelectionact.animate(
    [{ transform: "translateX(-100%)" }, { transform: "translateX(0)" }],
    {
      duration: 1000,
      fill: "forwards",
    }
  );
  effect();
}

btnNext.addEventListener("click", function () {
  Next();
});
btnPrev.addEventListener("click", function () {
  Prev();
});

setInterval(function(){
  Next();
}, 4500);
