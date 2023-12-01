
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
      
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
       autoplay: {
            delay: 5000,
       },
      pagination: {
        el: ".swiper-pagination",
      },
    });

// S e c t i o n : P l a c e -- S c r o l l  C l o u d 

console.log("respire ")

      // initialise parroller.js et définit les attributs pour les éléments sélectionnés
                    $(".paroller, [data-paroller-factor]").paroller({
                        facteur : '0,3', // multiplicateur pour la vitesse de défilement et le décalage
                        factorXs : '0,1', // multiplicateur pour la vitesse de défilement et le décalage
                        tapez : 'premier plan', // arrière-plan, premier plan
                        direction : 'horizontale', // verticale, horizontale
                        transition : 'transformation 0,2 s facile' // transition CSS
                    });

                    console.log("jejejejejej")
/*
gsap.to(".big" , {
    scrollTrigger : {
        scrub : 1
    },
    x : 900,
    direction: 1
});

gsap.to(".little" , {
    scrollTrigger : {
        scrub : 1
    },
    x : 700,
})
/*
gsap.registerPlugin(ScrollTrigger);

let tl = gsap.timeline({
    ScrollTrigger: {
        trigger: ".place",
        start: "top top",
        end: " bottom bottom",
        scrub: 1,

    }
}).to(".cloud",{
    x: 200,
    xPercent: -100,
    ease: "none",
})
*/
/*
let scrollTween = gsap.to( containerPlace, {
    xPercent: -100 + ( containerPlace.lenght - 1),
    ease: "none",
    duration: 6,
    scrollTrigger:{
        trigger: ".cloud",
        pin: true,
        scrub: true,
        end: `+=${containerPlace.offWidth}`
    }
} );
*/
