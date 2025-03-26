<?php
get_header(); // Inclut l'en-tête du site
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'textdomain' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'textdomain' ); ?></p>

                <?php get_search_form(); // Affiche le formulaire de recherche ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // Inclut le pied de page du site
?>