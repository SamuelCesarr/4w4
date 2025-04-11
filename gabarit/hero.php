<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
for ($k = 0; $k < 3; $k++) {
    $hero_background = get_theme_mod('hero_background' . $k, '');
}
?>
<section class="hero">
    <!-- /////////////////////////////////////// hero__carrousel -->
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[0] ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[1] ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[2] ?>');"></div>

    <!-- /////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
        <h1 class="hero__titre">
            <?php bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
            <?php bloginfo('description'); ?>
        </p>
        <a href="" class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
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