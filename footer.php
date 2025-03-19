<footer>
    <?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_courriel = get_theme_mod('footer_courriel', 'Default Title');
    ?>

    <div class="piedpage global">
        <section class="piedpage__s1">

            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
                "container_class" => "piedpage__s1__externe"
            )); ?>


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
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20">
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