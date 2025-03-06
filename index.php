<?php   /*
    * Modèle de base de notre thème
    */
?>
<?php get_header(); ?>
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
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "...") ; ?></div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>