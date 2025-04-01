<?php
get_header(); // Inclut l'en-tête du site
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404-not-found" style="background: url('<?php echo get_template_directory_uri(); ?>/images/ilepalmier.jpg');">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops, vous avez échoué sur l\'île 404 !', 'textdomain'); ?></h1>
            </header><!-- .page-header -->

            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
                "container_class" => "menu__externe"
            )); ?>

            <div class="page-content">
                <p><?php esc_html_e('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur \'Accueil\' pour découvrir à nouveau nos voyages d’exception !', 'textdomain'); ?></p>
                <div class="hero__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20">
                </div>
                <?php get_search_form(); // Affiche le formulaire de recherche 
                ?>
                <p><?php esc_html_e('Pour utiliser le customizer, cliquer sur Personnaliser et ajouter les réglages qui vous conviennent.'); ?></p>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // Inclut le pied de page du site
?>