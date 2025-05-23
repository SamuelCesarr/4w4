<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php
get_header();
?>
<h1>Voyagez Autrement avec Mondo Voyages!</h1>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire__article">
            <?php 
            // Image mise en avant ou image par défaut
            if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } else {
                echo '<img src="' . get_template_directory_uri() . '/images/maldives.jpg" alt="Image par défaut" />';
            }
            ?>
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            <div class="populaire__meta">
                <span>Auteur : <?php the_author(); ?></span> |
                <span>Publié le : <?php the_time('d/m/Y'); ?></span> |
                <span>Catégories : <?php the_category(', '); ?></span>
            </div>
            <div class="populaire__contenu"><?php the_content(); ?></div>
            <?php
            $temperatures = get_field('temperatures');
            if ($temperatures) : ?>
                <div class="populaire__temperature">
                    <strong>Températures :</strong>
                    <ul>
                        <?php if (!empty($temperatures['min'])) : ?><li>Min : <?php echo esc_html($temperatures['min']); ?>°C</li><?php endif; ?>
                        <?php if (!empty($temperatures['max'])) : ?><li>Max : <?php echo esc_html($temperatures['max']); ?>°C</li><?php endif; ?>
                        <?php if (!empty($temperatures['moyenne'])) : ?><li>Moyenne : <?php echo esc_html($temperatures['moyenne']); ?>°C</li><?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </article>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>