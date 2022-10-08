window.onload = function () {
    slideOne();
    slideTwo();
    slideThr();
    slideFour();
    slideFive();
    slideSix();
}

let sliderOne = document.getElementById("slider-1");
let sliderTwo = document.getElementById("slider-2");
let sliderThr = document.getElementById("slider-3");
let sliderFour = document.getElementById("slider-4");
let sliderFive = document.getElementById("slider-5");
let sliderSix = document.getElementById("slider-6");
let displayValOne = document.getElementById("range1");
let displayValTwo = document.getElementById("range2");
let displayValThr = document.getElementById("range3");
let displayValFour = document.getElementById("range4");
let displayValFive = document.getElementById("range5");
let displayValSix = document.getElementById("range6");
let minGap = 0;
let sliderTrack1 = document.querySelector(".slider-track");
let sliderMax = document.getElementById("slider-1").max;
let sliderTrack2 = document.querySelector(".slider-track2");
let sliderMax2 = document.getElementById("slider-3").max;
let sliderTrack3 = document.querySelector(".slider-track3");
let sliderMax3 = document.getElementById("slider-5").max;

function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent = sliderOne.value;
    fillColor();
}
function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = sliderTwo.value;
    fillColor();
}
function slideThr() {
    if (parseInt(sliderFour.value) - parseInt(sliderThr.value) <= minGap) {
        sliderThr.value = parseInt(sliderFour.value) - minGap;
    }
    displayValThr.textContent = sliderThr.value;
    fillColor2();
}
function slideFour() {
    if (parseInt(sliderFour.value) - parseInt(sliderThr.value) <= minGap) {
        sliderFour.value = parseInt(sliderThr.value) + minGap;
    }
    displayValFour.textContent = sliderFour.value;
    fillColor2();
}
function slideFive() {
    if (parseInt(sliderSix.value) - parseInt(sliderFive.value) <= minGap) {
        sliderFive.value = parseInt(sliderSix.value) - minGap;
    }
    displayValFive.textContent = sliderFive.value;
    fillColor3();
}
function slideSix() {
    if (parseInt(sliderSix.value) - parseInt(sliderFive.value) <= minGap) {
        sliderSix.value = parseInt(sliderFive.value) + minGap;
    }
    displayValSix.textContent = sliderSix.value;
    fillColor3();
}


function fillColor() {
    per1 = (sliderOne.value / sliderMax) * 100;
    per2 = (sliderTwo.value / sliderMax) * 100;
    sliderTrack1.style.background = `linear-gradient(to right, #dadae5 ${per1}%, #3264fe ${per1}%, #3264fe ${per2}%, #dadae5 ${per2}%) `;
}

function fillColor2(){
    per3 = (sliderThr.value / sliderMax2) * 100;
    per4 = (sliderFour.value / sliderMax2) * 100;
    sliderTrack2.style.background = `linear-gradient(to right, #dadae5 ${per3}%, #3264fe ${per3}%, #3264fe ${per4}%, #dadae5 ${per4}%) `;
}

function fillColor3(){
    per5 = (sliderFive.value / sliderMax3) * 100;
    per6 = (sliderSix.value / sliderMax3) * 100;
    sliderTrack3.style.background = `linear-gradient(to right, #dadae5 ${per5}%, #3264fe ${per5}%, #3264fe ${per6}%, #dadae5 ${per6}%) `;
}

function decrease1(){
    sliderOne.value--;
    slideOne();
}

function increase1(){
    sliderOne.value++;
    slideOne();
}

function Fdecrease1(){
    sliderTwo.value--;
    slideTwo();
}

function Fincrease1(){
    sliderTwo.value++;
    slideTwo();
}

function decrease2(){
    sliderThr.value--;
    slideThr();
}

function increase2(){
    sliderThr.value++;
    slideThr();
}

function Fdecrease2(){
    sliderFour.value--;
    slideFour();
}

function Fincrease2(){
    sliderFour.value++;
    slideFour();
}

function decrease3(){
    sliderFive.value--;
    slideFive();
}

function increase3(){
    sliderFive.value++;
    slideFive();
}

function Fdecrease3(){
    sliderSix.value--;
    slideSix();
}

function Fincrease3(){
    sliderSix.value++;
    slideSix();
}