//javascript for navigation bar effect on scroll
window.addEventListener("scroll", function(){
    const header =document.querySelector("header");
    header.classList.toggle('sticky', window.scrollY > 0);
});

//javascript for video slider

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");


var sliderNav = function(manual){
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });


    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});

//javascript for resposive navigation slidebar menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");
const navigationItems = document.querySelectorAll(".navigation a")

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});

navigationItems.forEach((navigationItem) => {
    navigationItem.addEventListener("click",() => {
        menuBtn.classList.remove("active");
        navigation.classList.remove("active");

    });
});


//javascript for scroll to up button
const scrollBtn = document.querySelector(".scrollToTop-btn");

window.addEventListener("scroll", function(){
    scrollBtn.classList.toggle("active", window.scrollY > 500);
});

//javascript for scroll back to top on click scroll-to-top button
scrollBtn.addEventListener("click", () =>{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

//javascript for reveal website elements on scroll

window.addEventListener("scroll", reveal);

function reveal(){
    var reveals = document.querySelectorAll(".reveal");

    for(var i = 0; i < reveals.length; i++){
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 50;

        if(revealTop < windowHeight - revealPoint) 
        {
            reveals[i].classList.add("active");
        }
    }
}

//javascript for review

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

//javascript for brand

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});