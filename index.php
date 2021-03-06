<php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PencilsPencilsPencils</title>
    <link rel="shortcut icon" href="images/ppp-logo-favicon-20px.png">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="main-header">
    <div>
        <a href="index.php" class="main-header__brand">
            <img src="images/ppp-logo-75px.png" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
  <nav class="main-nav">
    <ul class="main-nav__items">
        <li class="main-nav__item login-status">
            <?php 
            
            if(isset($_SESSION['userName'])) {
               echo '<p class="login-status">Logged in</p>';
            } else {
                echo '<p class="login-status">Logged out</p>';
            };

            ?>
        </li>
        <li class="main-nav__item">
            <a href="products/index.php">Products</a>
        </li>
        <li class="main-nav__item">
            <a href="login/index.php">Login</a>
        </li>
        <li class="main-nav__item main-nav__item--cta">
            <a href="registration/index.php">Registration</a>
        </li>
        </ul>
    </nav>
</header>
<main class="">
    <section id="top-section">
<!--         Comment to test pulling from remote -->
        <h1>Welcome to Pencils Pencils Pencils!!!</h1>
    </section>
    <section class="banner">
        <h2>We can help you with all your pencil needs!!!</h2>
        <h3>The paragraph below contains lorem ipsum text!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. At elementum eu facilisis sed. Leo vel fringilla est ullamcorper eget nulla. Nisl purus in mollis
            nunc sed id semper risus. Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Mauris vitae
            ultricies leo integer. Diam phasellus vestibulum lorem sed risus. Eget nunc scelerisque viverra
            mauris in. Venenatis a condimentum vitae sapien pellentesque. Feugiat pretium nibh ipsum consequat nisl vel
            pretium lectus. Ullamcorper a lacus vestibulum sed. Tortor at auctor urna nunc id cursus metus. Non blandit
            massa enim nec dui nunc mattis enim. Odio eu feugiat pretium nibh ipsum consequat nisl vel pretium.
        </p>

        <div class="banner-inset"><h4>Browse our wide selection of pencils.</h4>
            <img src="images/pencils-banner-1500px.jpg" class="banner-image" alt="Picture of variety of pencils on a shelf.">
        </div>
        <h5>This is an h5 heading - not used very often</h5>
        <h6>And this is an h6 heading - even more rarely used than the h5.</h6>
    </section>
</main>
<footer class="main-footer">
    <nav>
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="#">Contact</a>
            </li>
            <li class="main-footer__link">
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
    </nav>
</footer>

</body>

</html>
