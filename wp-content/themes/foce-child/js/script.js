console.log('wesh')
console.log("hello, wordl!")

let observer = new IntersectionObserver((entries, observer) => {
    entries.filter(e => e.isIntersecting).forEach(entry => {
        entry.target.classList.add("scrolled-top");
        observer.unobserve(entry.target);
    });
}); 


observer.observe(document.querySelector('.story'));
observer.observe(document.querySelector('#studio'));
//observer.observe(document.querySelector('.banner img'));
observer.observe(document.querySelector('#characters'));

document.querySelectorAll('before')
        .forEach(e =>{
            observer.observe(e)
        });
     
// Ajout classe animation vers le bas 

let observerDown = new IntersectionObserver((entries, observer) => {
    entries.filter(e => e.isIntersecting).forEach(entry => {
        entry.target.classList.add("scrolled-down");
        observer.unobserve(entry.target);
    });
}); 

observerDown.observe(document.querySelector('#place'));
observerDown.observe(document.querySelector('.banner'));
document.querySelectorAll('p')
        .forEach(e =>{
            observerDown.observe(e)
        });


// S e c t i o n : H e a d e r   H e r o -- P a r a l l a x e 

var s = skrollr.init();

// S e c t i o n : L e s  P e r s o n n a g e s -- S l i d e r

var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
       autoplay: {
            delay: 5000,
       },
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

// S e c t i o n : P l a c e -- S c r o l l  C l o u d 
/*
const cloud = document.querySelectorAll('.cloud');
window.addEventListener('scroll', () =>{
    
    let value = window.scrollY;
    console.log(value)
   // litleCloud.style.right = (window.scrollY /3) + "px";
    bigCloud.style.left = value * -1.5 + " px";
});
console.log(cloud);

window.addEventListener('scroll', () =>{
    cloud.style.right = (window.scrollY /3) + "px"
});*//*
const litleCloud = document.getElementsByClassName('.litle');
let bigCloud = document.querySelector(' #place .big');
const containerPlace = document.querySelector('#place');
let scrollLine = document.querySelector(".scroll")

console.log(containerPlace);
console.log('ggg');
console.log(bigCloud);
*/

gsap.to(".big" , {
    scrollTrigger : {
        scrub : 1
    },
    x : 500,
})