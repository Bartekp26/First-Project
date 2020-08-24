<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="The most beautiful places in America! Amazing views and photos!">
    <meta name="keywords" content="america, america views, beautiful places, beautiful views, beautiful america, amazing america, america photos, beautiful photos">
    <meta name="author" content="Bartosz Płaniak">
    <title>Nature of America - The most beautiful places</title>

    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark">
        <header><a href="#" class="navbar-brand logo"><img src="./img/logo.png" alt="website logo">Nature America</a></header>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="home">
            <div class="title">
                <h3>The most beautiful places in</h3>
                <h1>America</h1>
            </div>
            <a href="#two" class="icon"><i class="fas fa-angle-down"></i></a>
            <div class="darkerBackground"></div>
        </section>
        <section id="gallery">
            <header class="title"><h1>Gallery</h1></header>
            <div class="container-fluid gallery">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <figure>
                            <a href="img/Gallery/Golden-gate.jpg"><img src="img/Gallery/Golden-gate.jpg" alt=""/></a>
                            <figcaption>Golden Gate</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <figure>
                            <a href="img/Gallery/Rushmore.jpg"><img src="img/Gallery/Rushmore.jpg" alt=""/></a>
                            <figcaption>Rushmore Mount</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4 d-none d-lg-block">
                        <figure>
                            <a href="img/Gallery/Statue-of-Liberty.jpg"><img src="img/Gallery/Statue-of-Liberty.jpg" alt=""/></a>
                            <figcaption>Statue of Liberty</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4 d-none d-lg-none">
                        <figure>
                            <a href="img/Gallery/New-York.jpg"><img src="img/Gallery/New-York.jpg" alt=""/></a>
                            <figcaption>New York</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4 d-none d-lg-none">
                        <figure>
                            <a href="img/Gallery/Capitol.jpg"><img src="img/Gallery/Capitol.jpg" alt=""/></a>
                            <figcaption>Capitol</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4 d-none d-lg-none">
                        <figure>
                            <a href="img/Gallery/White-house.jpg"><img src="img/Gallery/White-house.jpg" alt=""/></a>
                            <figcaption>White House</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="showMore">Show more</div>
        </section>

        <section id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="email-form col-lg-6">
                        <form action="mail.php" method="POST">
                            <h1>Send me email</h1>
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea rows="8" name="message" placeholder="Text"></textarea>
                            <input type="submit" name="submit" value="Send">
                            <p class="error"><?php if(isset($_SESSION["emailError"])){
                              echo $_SESSION["emailError"];
                              unset($_SESSION["emailError"]);
                            } elseif(isset($_SESSION["subjectError"])){
                              echo $_SESSION["subjectError"];
                              unset($_SESSION["subjectError"]);
                            } elseif(isset($_SESSION["messageError"])){
                              echo $_SESSION["messageError"];
                              unset($_SESSION["messageError"]);
                            }?></p>
                        </form>
                    </div>

                    <div class="social-media col-lg-6">
                        <div><a href="https://www.facebook.com/" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                        <div><a href="https://www.instagram.com/" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a></div>
                        <div><a href="https://twitter.com/" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a></div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            All rights reserved | &copy 2019
        </footer>
    </main>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/simplelightbox/dist/simple-lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
