<?php

/**/ 
require_once get_template_directory() . '/inc/queries.php';
require_once get_template_directory() . '/inc/shortcode.php';


/*Registrando idk*/

function gymfitness_setup()
{
    /*Titulos SEO */
    add_theme_support('title-tag');

    /*Habilitando imagenes*/
    add_theme_support('post-thumbnails');

    /*Imagenes tamaños personalizados*/
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('caja', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
} 
add_action('after_setup_theme','gymfitness_setup');

/*Registrando Menus*/ 

function gymfitness_menu()
{
   register_nav_menus( array(
        'menu_principal' => __('Menu Principal','gymfitness')
   ));
}

add_action('init', 'gymfitness_menu');


function gymfitness_scripts_styles()
{
    /*Hoja de estilos  wp_head() */

    wp_enqueue_style( 'normalize',get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style( 'fuentes', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;1,700;1,900&family=Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10' );
    wp_enqueue_style( 'style', get_stylesheet_uri(),array('normalize','fuentes','slicknav'), '1.0.0');

  
 

    /*Hojas de script wp_footer() */
    wp_enqueue_script( 'slicknav',get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'),'1.0.10', true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js',array('slicknav','jquery'), '1.0.0',true );

    if(is_page('galeria'))
    {
        wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
        wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
    }
    if(is_page('contacto'))
    {
        wp_enqueue_style('leaflet', get_template_directory_uri() . '/css/leaflet.css', array(), '1.6.0');
        wp_enqueue_script('leaflet', get_template_directory_uri() . '/js/leaflet.js', array(), '1.6.0', true);
    }
    if(is_page('inicio'))
    {
        wp_enqueue_style('bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
        wp_enqueue_script('bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
    }
    
}
add_action('wp_enqueue_scripts','gymfitness_scripts_styles');


/*Definiendo Zonda de Widget*/ 
function gymfitness_widgets()
{
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init','gymfitness_widgets');