<?php get_header() ?>

<!-- /////////////////////////////////////// section hero -->
<?php get_template_part("gabarit/hero"); ?>

<!-- /////////////////////////////////////// section populaire -->
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

<!-- //////////////////////////////////// section destination REST-API -->
<?php categories_liste("destination"); ?>
     <section class="destination">
         <h2 class="destination__titre">Articles de la catégorie</h2>
         <div class="destination__list"></div>
     </section>
<?php get_footer(); ?>
</body>

</html>