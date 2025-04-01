<?php if (get_theme_mod('404_recherche', true)) : ?>
    <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <label>
            <input class="recherche__input" type="search" placeholder="<?php esc_attr_e('Rechercher...', 'your-theme-textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </label>
    </form>
<?php endif; ?>