<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');

$hero_background = get_theme_mod('hero_background', 'Default Title');
?>
<section class="hero">
    <!-- /////////////////////////////////////// hero__carrousel -->
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background ?>');"></div>

    <!-- /////////////////////////////////////// hero__contenu -->
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