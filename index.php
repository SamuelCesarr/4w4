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
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="logo voyage">
            </figure>
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sport</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Pleine Nature</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Croisière</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Repos</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Économique</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Favorite</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Pays</a>
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
                Voyagez Autrement avec Mondo Voyages!
            </h1>
            <p class="hero__description">
                Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
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
                <img src="<?php echo get_template_directory_uri() . '/images/img1.jpg' ?>" alt="Image de voyage">
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