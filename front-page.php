<?php get_header() ?>

<!-- /////////////////////////////////////// section hero -->
<?php get_template_part("gabarit/hero"); ?>

<!-- /////////////////////////////////////// section populaire -->
<section class="populaire">
     <div class="boiteflex global">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <?php if (in_category('galerie')){
             the_content();
         } else { ?>         
         <?php get_template_part("gabarit/carte"); ?>
         <?php } ?>
         <?php endwhile; endif; ?>
     </div>
 </section>

<!-- //////////////////////////////////// section catégorie REST-API -->
<section class="categories">
    <h2 class="categories__titre">Catégories</h2>
    <div class="categories__list">
        <?php categorie_par_destination('populaire'); ?>
    </div>
</section>

<!-- //////////////////////////////////// section destination REST-API -->
     <section class="destination">
         <h2 class="destination__titre">Articles de la catégorie</h2>
         <div class="destination__list">
         </div>
     </section>
<?php get_footer(); ?>
</body>

</html>