const sliderWrapper = document.querySelector("#sliderWrapper");
let sliderSelection = document.querySelectorAll(".sliderCaption");
let sliderSelectionLast = sliderSelection[sliderSelection.length -1];

const btnNext = document.querySelector("#btnNext");
const btnPrev = document.querySelector("#btnPrev");

sliderWrapper.insertAdjacentElement('afterbegin', sliderSelectionLast);

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


$(".btn").click(function(){
    $(this).addClass("animate");
    $(this).one(function(event){});
});