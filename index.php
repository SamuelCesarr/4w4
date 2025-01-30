<?php   /*
    * Modèle de base de notre thème
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
            <img src="http://localhost/4w4/wp-content/themes/exercice1/images/logo.png" alt="logo voyage">
            </figure>
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Culturelle</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Culturelle</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Zen</a>
                        </li>
                    </ul>
                </nav>
                <div class="entete__recherche">
                    <form  class="recherche">
                        <input type="text" class="recherche__input">
                        <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                Club de voyage
            </h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia minus asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae laboriosam, ex delectus nesciunt.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>
 
    <section class="promotion">
        <div class="carte carte--grande">
            <figure class="carte__image">
                <img src="http://localhost/4w4/wp-content/themes/exercice1/images/img1.jpg" alt="Image de voyage">
            </figure>
            <div class="carte__contenu">
                <h2 class="carte__titre">Destination de rêve</h2>
                <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                <button class="carte__bouton carte__bouton--actif">Réserver</button>
            </div>
        </div>
    </section>
</body>
</html>