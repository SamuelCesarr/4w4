<?php get_header() ?>
<h1>Voyagez Autrement avec Mondo Voyages!</h1>
<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
?>
<section class="hero" style="background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat">
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
        <p>Auteur: <?php echo $hero_auteur;  ?></p>
    </div>
</section>
<section class="galerie">
    <h2 class="galerie__titre">Nos destinations favorites</h2>
    <div class="galerie__images">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part("gabarit/carte"); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>

<section class="promotion">
    <div class="carte carte--grande">
        <figure class="carte__image">
            <img src="<?php echo get_template_directory_uri() . '/images/paysage1.jpg' ?>" alt="image de paysage">
        </figure>
        <div class="carte__contenu">
            <h2 class="carte__titre">Destination de rêve</h2>
            <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
            <button class="carte__bouton carte__bouton--actif">Réserver</button>
        </div>
    </div>
</section>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="populaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>