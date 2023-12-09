
const sliders = document.querySelectorAll(".cards-slide-container");

const grid_views = document.querySelectorAll(".products-grid-view");

let spacer = "<div class=\"spacer\"></div>";
let content = "";
for(let i = 0; i < 23; i++) {
    content += `<div class="card-item">
                <div class="actions">
                    <div class="icon material-icons">favorite_outline</div>
                    <div class="icon material-icons-outlined">shopping_cart</div>
                </div>
                <div class="header">
                    <div class="title">
                        Brand new computer
                    </div>
                    <div class="price">
                        69.69$
                    </div>
                </div>
            </div>`
    console.log("test");
}

sliders.forEach(slider => {
    const slider_container = slider.getElementsByClassName("cards-container")[0];
    slider_container.innerHTML = spacer + content + spacer;

});
grid_views.forEach(grid_view => {
    grid_view.innerHTML = content;
})
