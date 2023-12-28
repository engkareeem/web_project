
<?php
    include './components/signup-modal.php';
    include './components/login-modal.php';
    include_once 'api/DBApi.php';
$user = DBApi::ensureLogin();
    $isLogged = $user->username !== null;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div id="nav">
    <a href="index.php"><img src="/src/logo-no-text.png" alt="" id="logo"></a>

    <div id="nav-links">
        <a href="index.php" class="nav-item-link">Home</a>
        <a href="all_products.php" class="nav-item-link">Catalog</a>
        <?php
        if($isLogged) {
            echo '<a href="profile-page.php" class="nav-item-link">Profile</a>';
            echo '<a href="shopping_cart.php" class="nav-item-link" id="cart-nab-btn">Cart
            <span class="position-absolute start-100 translate-middle badge rounded-pill cart-count-Badge"> 9+ </span>
                </a>';
        }
        ?>

    </div>
    <div id="nav-buttons">
        <div class="cart-icon-wrapper">
            <div class="icon material-icons" id="shopping-cart-icon">shopping_cart
                <span class="position-absolute start-100 translate-middle badge rounded-pill cart-count-Badge"> 9+ </span>
            </div>
        </div>

        <?php
            if(!$isLogged) {
                echo '<button type="button" data-bs-toggle="modal" data-bs-target="#login-modal">Log In</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign up</button>';
            }
        ?>

    </div>
</div>

<div id="notification-section">

</div>


<script>
    const navbar = document.getElementById('nav');
    $("#nav").click(()=> {
        notify("Scrolled", "been scrolling for ages", 1);

    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 8) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });


    /**
     * This function shows notification in any page.
     *
     * @param {string} msgTitle Title of the notification.
     * @param {string} msgBody Notification content.
     * @param {String} msgType Type of the Notification: \
     * -1 => Error. \
     * 0 => Warning. \
     * 1 => Success.
     * @param {number} msgTimeout Time (ms) till notification get removed.
     * @param {number} animationDuration Time (ms) for animation duration
     * @return {null}
     */
    function notify(msgTitle, msgBody, msgType = 1, msgTimeout = 1000, animationDuration = 1000){
        const notificationSection = $("#notification-section");
        let notificationIcon, className;
        switch (msgType){
            case -1:
                notificationIcon = 'warning'
                className = 'error-notification';
                break;
            case 0:
                notificationIcon = 'error'
                className = 'warning-notification';
                break;
            case 1:
                notificationIcon = 'check_circle'
                className = 'success-notification';
        }
        const notificationInstance = `
            <div class="notification ${className}">
                <div class="notification-icon icon material-icons-round">
                    ${notificationIcon}
                </div>
                <div class="notification-body">
                    <div class="notification-title">${msgTitle}</div>
                    <div class="notification-msg">${msgBody}</div>
                </div>
            </div>`;

        const notification = $(notificationInstance);
        notificationSection.append(notification);
        notification.fadeOut(0);

        notification.fadeIn(animationDuration, ()=> {
            setTimeout(function() {
                notification.fadeOut(animationDuration - animationDuration/4, () => {
                    notification.remove();
                });
            }, msgTimeout);
        });


    }

    $(document).ready(function() {
        let path = window.location.pathname
        path = path.substring(path.lastIndexOf("/")+1);
        $('#nav-links a[href*="'+path+'"]').addClass('active');
        if(path.indexOf("cart") > 0) {
            $("#shopping-cart-icon").css("color", "white");
        }
        $("#shopping-cart-icon").click(function (){
            window.location.href = 'shopping_cart.php';

        });
    });
</script>