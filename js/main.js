
let flag = false;



$(()=> {
    $(".horizontal-spinner .spinner-decrement").on('click',function () {
        let spinnerValue = $(this).next();
        if(spinnerValue.val() > 1) {
            spinnerValue.val(parseInt(spinnerValue.val()) - 1);
        }
    });
    $(".horizontal-spinner .spinner-increment").on('click',function () {
        let spinnerValue = $(this).prev();
        spinnerValue.val(parseInt(spinnerValue.val()) + 1);
    });
});



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
    if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

