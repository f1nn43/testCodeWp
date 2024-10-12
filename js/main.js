const menuBtn = document.querySelector('.header__menuBtn')
const menu = document.querySelector('.header')
const body = document.querySelector('body')

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
    body.classList.toggle('active')
})