<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function btg_register_assets()
{
  wp_enqueue_style('btg-style', get_template_directory_uri() . '/css/style.css', 1.0);
  wp_enqueue_script('btg-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'btg_register_assets');



// Page d'options
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'  => 'Options du thème',
    'menu_title'  => 'Options',
    'menu_slug'  => 'options',
    'capability'  => 'edit_posts',
    'redirect'  => false,
    'potision'  => 2
  ));
};

// Menu
register_nav_menus(array(
  'main' => 'Menu principal',
  'footer' => 'Menu du footer'
));

add_filter('wpcf7_autop_or_not', '__return_false');

function wpm_custom_post_type()
{

  // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
  $labels = array(
    // Le nom au pluriel
    'name'                => _x('Particulier', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name'       => _x('Particulier', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name'           => __('Particulier'),
    // Les différents libellés de l'administration
  );

  // On peut définir ici d'autres options pour notre custom post type

  $args = array(
    'label'               => __('Particulier'),
    'description'         => __('Les posts pour particulier'),
    'labels'              => $labels,
    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
    /* 
		*/
    'show_in_rest' => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
    'rewrite'        => array('slug' => 'particulier'),

  );

  // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
  register_post_type('particulier', $args);
}

add_action('init', 'wpm_custom_post_type', 0);
