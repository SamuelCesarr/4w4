<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categorie_par_destination($cat_a_retirer)
{
    $categories = get_categories(array(
        'hide_empty' => false,
    ));
    if (!empty($categories)) {
        echo '<ul class="categorie__ul">';
        foreach ($categories as $categorie) {
            if ($categorie->slug === $cat_a_retirer) continue;
            echo '<li data-id="' . esc_attr($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
    }
}
