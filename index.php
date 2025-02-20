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
                        <input type="text" class="recherche__input" placeholder="Recherche...">
                        <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="hero__contenu-global">
            <h1 class="hero__titre">
                Voyagez Autrement avec Mondo Voyages!
            </h1>
            <p class="hero__description">
                Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <a href="" class="hero__adresse">
                3800, rue Sherbrooke, Montreal
            </a>
            <a href="" class="hero__telephone">
                514-254-7131
            </a>
            <button class="hero__bouton">
                S'INSCRIRE
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20">
            </div>
        </div>
    </section>
    <section class="inscription">
        <div class="inscription__nom">
            <p>Nom</p>
            <input type="text" name="nom" id="nom" placeholder="Écrivez votre nom">
        </div>
        <div class="inscription__prenom">
            <p>Prénom</p>
            <input type="text" name="prenom" id="prenom" placeholder="Écrivez votre prénom">
        </div>
        <div class="inscription__courriel">
            <p>Courriel</p>
            <input type="text" name="courriel" id="courriel" placeholder="Écrivez votre courriel">
        </div>
        <div class="inscription__tel">
            <p>Téléphone</p>
            <input type="text" name="tel" id="tel" placeholder="Écrivez votre téléphone">
        </div>
        <div class="inscription__bouton">
            <p> espace</p>
            <button>
                S'INSCRIRE
            </button>
        </div>
    </section>
    <section class="galerie">
        <h2 class="galerie__titre">Nos destinations favorites</h2>
        <div class="galerie__images">
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage1.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage2.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage3.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage4.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage5.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage6.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage7.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage8.jpg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage9.jpeg' ?>" alt="image de paysage">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage10.jpg' ?>" alt="image de paysage">
            </figure>
        </div>
    </section>
</body>
</html>