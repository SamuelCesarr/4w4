<?php
get_header(); // Inclut l'en-tête du site
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! Cette page ne peut pas être trouvée.', 'textdomain'); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e('Rien n\'a été trouvé à cet endroit. Essayez une recherche?', 'textdomain'); ?></p>
                <div class="hero__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20">
                </div>
                <?php get_search_form(); // Affiche le formulaire de recherche 
                ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // Inclut le pied de page du site
?>