 @section('header')
 <!DOCTYPE html>
 <html lang="fr">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <script src="https://unpkg.com/scrollreveal"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="icon" type="image/png" href="<?php echo url('/assets/img/logo_zebrajazz.png') ?>" />
         <link href="https://fonts.googleapis.com/css?family=Poller+One|Roboto|Montserrat:300,800&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/style.css">
         <title>Accueil - ZebraJazz</title>
     </head>

     <body>

         <header>
             <h1 id="zebra">ZEBRAJAZZ QUINTET</h1>
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
         @show

         <main>
             <div class="app">
                 @yield('content')
             </div>
         </main>

         @section('footer')
         <footer>
             <ul>
                 <li>
                     <h2>ZebraJazz</h2>
                 </li>
             </ul>
             <ul id="rights">
                 <li><a href="<?php echo url('/home') ?>"><button>Espace Administrateur</button></a></li>
                 <li><a href="<?php echo url('/mentions-legales') ?>">Mentions legales</a></li>
                 <li>Tous droits réservés &copy; 2019</li>
             </ul>
         </footer>

         <div id="toTop">
             <a class="top" href="#"><img src="assets/img/arrow6.png" alt="Retourner en haut"></a>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
         <script src="<?php echo url('/assets/js/main.js') ?>"></script>
     </body>

 </html>
 @show
