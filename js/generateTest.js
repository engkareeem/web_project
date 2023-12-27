
$(() => {
   let cart_item = ` <div class="cart-item">
            <div class="img-container">
                <img src="https://cdn.originpc.com/img/compare-all/gaming-desktops/genesis-7000-series-system-image.png" alt="...">
            </div>
            <div class="description">
                <div class="title">Brand new computer</div>
                <div class="price">Price: 69$</div>
            </div>
            <div class="horizontal-spinner-container">
                <div class="item-price">
                    69$ x
                </div>
                <div class="horizontal-spinner">
                    <button class="spinner-decrement">&lt;</button>
                    <input type="number" class="spinner-value" value="1" min="1" readonly>
                    <button class="spinner-increment">&gt;</button>
                </div>
            </div>
            <div class="icon-button">
                <div class="icon material-icons">delete</div>
            </div>
        </div>`;
   for(let i = 0; i < 6; i++) {
       $(".cart-container").append(cart_item);
   }
});

const sliders = document.querySelectorAll(".cards-slide-container");

const grid_views = document.querySelectorAll(".products-grid-view");

let spacer = "<div class=\"spacer\"></div>";
let content = "";
for(let i = 0; i < 23; i++) {
    content += `<div class="card-item" onclick="location.href = 'product_view.php'">
                <div class="actions">
                    <div class="icon material-icons">favorite_outline</div>
                    <div class="add-to-cart-button icon material-icons-outlined">shopping_cart</div>
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
