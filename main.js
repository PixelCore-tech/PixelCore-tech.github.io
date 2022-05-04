const hamburger = document.querySelector('.hamburger');
const navi = document.querySelector('.navi-mobile');

const handleClick = () => {
    hamburger.classList.toggle('hamburger--active');
    navi.classList.toggle('navi--active');
} 
hamburger.addEventListener('click', handleClick);
