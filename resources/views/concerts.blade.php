<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo url('/assets/img/logo_zebrajazz.png') ?>" />
        <link href="https://fonts.googleapis.com/css?family=Poller+One|Roboto|Montserrat:300,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="assets/css/cssbox.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Concerts - ZebraJazz</title>
    </head>

    <body>
        <header>
            <h1>ZEBRAJAZZ QUINTET</h1>
            <nav class="une">
                <div class="entete hamburger">
                    <i class="material-icons menuHamb">menu</i>
                    <ul class="menuNav">
                        <i class="material-icons md-18 arrow-back">arrow_back</i>
                        <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                        <li><a href="<?php echo url('/bio') ?>">Bio</a></li>
                        <li><a href="<?php echo url('/agenda') ?>">Agenda</a></li>
                        <li><a href="<?php echo url('/concerts') ?>">Concerts</a></li>
                        <li><a href="<?php echo url('/galerie') ?>">Galerie</a></li>
                        <li><a href="<?php echo url('/affiches') ?>">Affiches</a></li>
                        <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="deux">
                <div class="entete desktop">
                    <ul>
                        <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                        <li><a href="<?php echo url('/bio') ?>">Bio</a></li>
                        <li><a href="<?php echo url('/agenda') ?>">Agenda</a></li>
                        <li><a href="<?php echo url('/concerts') ?>">Concerts</a></li>
                        <li><a href="<?php echo url('/galerie') ?>">Galerie</a></li>
                        <li><a href="<?php echo url('/affiches') ?>">Affiches</a></li>
                        <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section class="concerts">
                <h2>Nos précédents concerts</h2>
                <h3>Fête de la musique à Salon de Provence 21 juin 2019 </h3>
                <img src="assets/img/concert1.jpg" alt="fête de la musique salon 2019">

                <h3>Concert à Lançon de Provence avril 2019</h3>
                <img src="assets/img/concert2.jpg" alt="concert Lançon avril 2019">

                <h3>Concert à Salon de Provence mars 2019</h3>
                <img src="assets/img/concert3.jpg" alt="concert Salon mars 2019">

                <h3>Concert à Peynier mars 2019 -L'histoire du Jazz en noir et blanc</h3>
                <img src="assets/img/concert4.jpg" alt="concert Peynier mars 2019">

                <h3>Concert à Lançon de Provence septembre 2018 (video)</h3>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/YOEjPa-91dI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <h3>Concert à Orgon novembre 2018</h3>
                <img src="assets/img/concert6.jpg" alt="concert Orgon mars 2019">

            </section>
        </main>

        <footer>
            <ul>
                <li>
                    <h2>ZebraJazz</h2>
                </li>
            </ul>
            <ul id="rights">
                <li>Tous droits reserves &copy; 2019</li>
                <li>Mentions legales</li>
            </ul>
        </footer>

        <div id="toTop">
            <a class="top" href="#"><img src="assets/img/arrow6.png" alt="Retourner en haut"></a>
        </div>

        <script src="<?php echo url('/assets/js/main.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    </body>

</html>
