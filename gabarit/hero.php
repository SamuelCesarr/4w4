<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_nb_images = get_theme_mod('hero_nb_images', 3);

for ($k = 0; $k < $hero_nb_images; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}
?>
<section class="hero">
    <!-- /////////////////////////////////////// hero__carrousel -->
    <?php for ($k=0; $k<$hero_nb_images; $k++): ?>
        <div class="hero__carrousel hero__carrousel--active" style="background-image: url('<?php echo $hero_background[$k] ?>');"></div>
    <?php endfor; ?>

    <div class="hero__radio">
        <?php for ($k=0; $k<$hero_nb_images; $k++): ?>
            <input class="hero__radio__input" type="radio" name="carrousel" id="slide<?php echo $k; ?>" <?php if ($k === 0) echo 'checked'; ?>>
            <label class="hero__radio__label" for="slide<?php echo $k; ?>"></label>
        <?php endfor; ?>
    </div>

    <!-- /////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre">
                <?php bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
                <?php bloginfo('description'); ?>
            </p>
        </div>
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
        <a href="<?= home_url() . "/conference-paris";  ?>" class="hero__bouton">
            Conférence sur Paris
        </a>
        <div class="hero__icone-app">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20">
        </div>
        <p>Auteur: <?php echo $hero_auteur;  ?></p>
    </div>
</section>