
<?php
    include './components/signup-modal.php';
    include './components/login-modal.php';
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
        <a href="profile-page.php" class="nav-item-link">Profile</a>
    </div>
    <div id="nav-buttons">
        <button type="button">Log out</button>

        <button type="button" data-bs-toggle="modal" data-bs-target="#login-modal">Log In</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign up</button>
    </div>
</div>



<script>
    const navbar = document.getElementById('nav');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 8) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    $(document).ready(function() {
        let path = window.location.pathname
        path = path.substring(path.lastIndexOf("/")+1);
        $('#nav-links a[href*="'+path+'"]').addClass('active');
    });
</script>