/*console.log("hello")
let toggle = document.querySelector('.toggle');
console.log(toggle)
let body = document.querySelector('body');

toggle.addEventListener('click', function(){

    body.classList.toggle('open');
}) */

const menuBurger = document.querySelector('.nav-toggle');
const navigation = document.querySelector('#navigation')
console.log(navigation)
menuBurger.addEventListener('click', function(){

    menuBurger.classList.toggle('active');
    navigation.classList.toggle('active');

});
