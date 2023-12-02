const menuBurger = document.querySelector('.nav-toggle');
const navigation = document.querySelector('#navigation')
const imgMenuBurger = document.querySelector('.container__nav-imgs')
console.log(imgMenuBurger)
menuBurger.addEventListener('click', function(){

    menuBurger.classList.toggle('active');
    navigation.classList.toggle('active');
<<<<<<< HEAD
    imgMenuBurger.classList.toggle('active')

=======
    imgMenuBurger.classList.toggle('active');
>>>>>>> 4df99a307537c2e0f30ed70f30435fdd62fef858
});

