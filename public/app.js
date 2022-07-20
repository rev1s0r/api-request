let thumbnails = document.getElementsByClassName('thumbnail');
let slider = document.getElementById('slider');

let buttonRight = document.getElementById('slide-right');
let buttonLeft = document.getElementById('slide-left');

buttonLeft.addEventListener('click', function(){
    slider.scrollLeft -= 1000;
})

buttonRight.addEventListener('click', function(){
    slider.scrollLeft += 1000;
})

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;




