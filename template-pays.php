<?php
/*
Template Name: Pays
*/
get_header();
?>

<section class="pays__intro">
    <h1>Les plus beaux pays</h1>
    <p>
        Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.
    </p>
    <div class="pays__galerie">
        <img src="<?php echo get_template_directory_uri(); ?>/images/france.jpg" alt="France">
        <img src="<?php echo get_template_directory_uri(); ?>/images/japon.jpg" alt="Japon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mexique.jpeg" alt="Mexique">
    </div>
</section>

<?php
if (function_exists('creer_vague')) {
    creer_vague('#e0f7fa', '#fff');
}
?>

<section class="pays__restapi global">
    <nav class="pays__menu"></nav>
    <h2 class="pays__categorie-titre"></h2>
    <div class="pays__destinations"></div>
</section>

<?php
if (function_exists('creer_vague')) {
    creer_vague('#fff', '#e0f7fa');
}
?>

<?php get_footer(); ?>