const linksContainer = document.querySelector('.nav');
const links = document.querySelectorAll('.nav-item');

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', () => {
        document.querySelector('.active').classList.remove('active');
        this.classList.add('active');
    }, false);
}

window.addEventListener('scroll', () => {
    if(window.scrollY > 100){
        document.querySelector('.navbar').classList.add('black');
        document.querySelector('.navbar-collapse').classList.remove('show');
    } else {
        document.querySelector('.navbar').classList.remove('black');
    }
}, false);


let showMoreButton = document.querySelector('div.showMore');
const noneElements = document.querySelectorAll('div.d-none');

const showMore = e => {
    const target = e.target;

    if(showMoreButton.textContent == "Show more"){
        for(let i = 0; i < noneElements.length; i++){

            noneElements[i].classList.remove('d-none', 'd-lg-none');

            target.textContent = "Show less"; 
        }     
    } else if(showMoreButton.textContent == "Show less"){
        for (let i = 0; i < noneElements.length; i++) {
            
            noneElements[i].classList.add('d-none', 'd-lg-none');

            target.textContent = "Show more";
        }
    } 
}

showMoreButton.addEventListener('click', showMore, false);

var lightbox1 = $('.gallery a').simpleLightbox();
