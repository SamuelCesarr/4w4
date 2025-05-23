<?php
$footer_mission = get_theme_mod('footer_mission', 'Default Title');
$footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
$footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
$footer_courriel = get_theme_mod('footer_courriel', 'Default Title');
$footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#ec880d');
/* permet d'afficher une vague avant le footer */
vague($footer_couleur_arriere)
?>

<footer style="background-color: <?= $footer_couleur_arriere ?> ">


    <div class="piedpage global">
        <section class="piedpage__s1">

            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
                "container_class" => "piedpage__s1__externe"
            )); ?>
            <div class="piedpage__s2__image">
                <?php
                $footer_img = get_theme_mod('footer_destination_image');
                if ($footer_img) {
                    echo '<img src="' . esc_url($footer_img) . '" alt="Destination" style="max-width:200px;width:100%;height:auto;">';
                }
                ?>
            </div>

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
                <div class="piedpage__s1__adresse__tel">
                    <?php echo $footer_telephone; ?>
                </div>
                <div class="piedpage__s1__adresse__courriel">
                    <?php echo $footer_courriel; ?>
                </div>
                <div class="piedpage__s1__adresse__coord">
                    <?php echo $footer_adresse; ?>
                </div>
            </div>
            <div class="piedpage__s1__icone-app">
                <?php afficher_icones_sociaux(); ?>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2">

        </section>
    </div>
</footer>
<?php wp_footer() ?>