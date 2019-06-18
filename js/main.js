const linksContainer = document.querySelector('.nav');
const links = document.querySelectorAll('.nav-item');

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function () {
        document.querySelector('.active').classList.remove('active');
        this.classList.add('active');
    }, false);
}

window.addEventListener('scroll', function(){
    if(window.scrollY > 100){
        document.querySelector('.navbar').classList.add('black');
        document.querySelector('.navbar-collapse').classList.remove('show');
    } else {
        document.querySelector('.navbar').classList.remove('black');
    }
}, false);