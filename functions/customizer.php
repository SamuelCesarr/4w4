<?php

function theme_31w_customize_register($wp_customize)
{
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
  ));
  //////////////////////////////////////////////////////// l'auteur
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Samuel César', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  //////////////////////////////////////////////////////// le courriel
  $wp_customize->add_setting('hero_courriel', array(
    'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_courriel', array(
    'label' => __('Courriel', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  ////////////////////////////////////////////////// image en background de la zone hero
  for ($k=0; $k<3; $k++) {
    $wp_customize->add_setting('hero_background_' . $k, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
      'label' => __('Image en background' . ($k+1), 'theme_31w'),
      'section' => 'hero_section',
    )));
  }
  ////////////////////////////////////////////////// couleur du texte de la zone hero
  $wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
  )));

  //////////////////////////////////////////////////////// Nouvelle section footer

  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_31w'),
    'priority' => 30,
  ));
  ////////////////////////////////////////////////////////// Champ mission
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Mission du club de voyage', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'textarea',
  ));

  ///////////////////////////////////////////////////////// Champ téléphone
  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('514-254-7131', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Telephone', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////////////// Champ courriel
  $wp_customize->add_setting('footer_courriel', array(
    'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_courriel', array(
    'label' => __('Courriel', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////////////// Champ adresse
  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('3800, rue Sherbrooke, Montreal', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  //////////////////////////////////////////////////////// Nouvelle section 404

  $wp_customize->add_section('section_404', array(
    'title' => __('Section 404', 'theme_31w'),
    'priority' => 30,
  ));

  ////////////////////////////////////////////////// image en background
  $wp_customize->add_setting('404_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => 'section_404',
  )));

  ////////////////////////////////////////////////// couleur des boutons du menu 404
  $wp_customize->add_setting('404_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_couleur', array(
    'label' => __('Couleur des boutons', 'theme_31w'),
    'section' => 'section_404',
  )));

  function custom_nav_couleur_404_dynamic_css()
  {
    $couleur_404 = get_theme_mod('couleur_404', '#ffffff');
?>
    <style>
      :root {
        --couleur_404: <?php echo esc_attr($couleur_404); ?>;
      }
    </style>
<?php
  }
  add_action('wp_head', 'custom_nav_couleur_404_dynamic_css');

  ///////////////////////////////////////////////////////// Champ titre
  $wp_customize->add_setting('404_titre', array(
    'default' => __('Oops, vous avez échoué sur l\'île 404 !', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('404_titre', array(
    'label' => __('Titre', 'theme_31w'),
    'section' => 'section_404',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////////////// Champ texte
  $wp_customize->add_setting('404_message', array(
    'default' => __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur \'Accueil\' pour découvrir à nouveau nos voyages d’exception !', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('404_message', array(
    'label' => __('Message', 'theme_31w'),
    'section' => 'section_404',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////////////// Champ recherche
  $wp_customize->add_setting('404_recherche', array(
    'default'   => true,
    'sanitize_callback' => 'wp_validate_boolean',
  ));

  $wp_customize->add_control('404_recherche_control', array(
    'label'    => __('Barre de recherche', 'theme_31w'),
    'section'  => 'section_404',
    'settings' => '404_recherche',
    'type'     => 'checkbox',
  ));
}

add_action('customize_register', 'theme_31w_customize_register');
?>