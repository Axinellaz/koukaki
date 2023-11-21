console.log("ok")

let observer = new IntersectionObserver((entries, observer) => {
    entries.filter(e => e.isIntersecting).forEach(entry => {
        entry.target.classList.add("scrolled-top");
        observer.unobserve(entry.target);
    });
}); 


observer.observe(document.querySelector('.story'));
observer.observe(document.querySelector('#studio'));
observer.observe(document.querySelector('.banner img'));
observer.observe(document.querySelector('#characters'));
observer.observe(document.querySelector('#place'));

document.querySelectorAll('before')
        .forEach(e =>{
            observer.observe(e)
        });


let observerDown = new IntersectionObserver((entries, observer) => {
    entries.filter(e => e.isIntersecting).forEach(entry => {
        entry.target.classList.add("scrolled-down");
        observer.unobserve(entry.target);
    });
}); 

observerDown.observe(document.querySelector('.banner'));

document.querySelectorAll('p')
        .forEach(e =>{
            observer.observe(e)
        });


