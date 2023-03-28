const sliderWrapper = document.querySelector("#sliderWrapper");
let sliderSelection = document.querySelectorAll(".sliderCaption");
let sliderSelectionLast = sliderSelection[sliderSelection.length -1];

/*var effect = document.querySelector(".sliderHead");*/

const btnNext = document.querySelector("#btnNext");
const btnPrev = document.querySelector("#btnPrev");

sliderWrapper.insertAdjacentElement('afterbegin', sliderSelectionLast);

/*setTimeout(function(){
    effect.classList.remove("effectHead");
    effect.classList.add("effectHead");
}, 1000);*/

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".sliderCaption")[0];
    sliderWrapper.style.transform = "translateX(0%)";
    sliderWrapper.style.transition = "all 1s";    
    setTimeout(function(){
        sliderWrapper.style.transition = "none";
        sliderWrapper.insertAdjacentElement('beforeend', sliderSectionFirst);
    }, 500);
}

function Prev(){
    let sliderSelection = document.querySelectorAll(".sliderCaption");
    let sliderSelectionLast = sliderSelection[sliderSelection.length -1];
    sliderWrapper.style.transform = "translateX(0%)";
    sliderWrapper.style.transition = "all 1s";
    setTimeout(function(){
        sliderWrapper.style.transition = "none";
        sliderWrapper.insertAdjacentElement('afterbegin', sliderSelectionLast);
    }, 500);
}



btnNext.addEventListener('click',function(){
    Next();
})
btnPrev.addEventListener('click',function(){
    Prev();
})

setInterval(function(){
    Next();
},5000);