
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    autoplay : true,
    margin:-2,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        750:{
            items:3
        },
        1000:{
            items:4
        },
        1200:{
            items:5
        },
        1400:{
            items:6
        }
    }
});

});

window.onresize = function(){
    var a = window.innerWidth;
    if(a == 1000)
    {
        console.log(a);
    }
}

let loader = document.getElementById('loader');
loader.style.display = 'block';

setTimeout(() => {
    loader.style.display = 'none';
}, 1000);