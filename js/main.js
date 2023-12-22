
let flag = false;

function switch_theme() {
    if(flag) {
        document.documentElement.setAttribute('data-theme', 'light');
        flag = false;
    } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        flag = true;
    }
}

function cards_slide_right(event) {
    const container = event.target.parentElement.getElementsByClassName('cards-container')[0];
    const card = container.getElementsByClassName('card-item');
    container.scrollLeft += card[0].offsetWidth;
}
function cards_slide_left(event) {
    const container = event.target.parentElement.getElementsByClassName('cards-container')[0];
    const card = container.getElementsByClassName('card-item');
    container.scrollLeft -= card[0].offsetWidth;
}

const loginModal = document.getElementById('login-modal')
loginModal.addEventListener('shown.bs.modal', () => {
    console.log("Opened the modal");
})

const navbar = document.getElementById('nav');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

