<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>


    <!-- Estilo de la imagen de fondo (Me dicen Jack Sparrow xD) -->
    <style>
        .home .site-header{
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(<?php esc_html( the_field('imagen_principal') )?>);
        }
       
    </style>
    <!-- Fin de estilos -->
</head>
<body <?php body_class()?>>
    
<header class="site-header">
     
    <div class="contenedor header-grid">
        <div class="barra-navegacion">
            <!-- Logo -->
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg'?> " alt="logo">
            </div>

            <!-- Menu -->
                <?php 
                    $args = array(
                        'theme_location' => 'menu_principal',
                        'container' => 'nav',
                        'container_class'=> 'menu-principal'
                    );

                    wp_nav_menu( $args);   
                ?>
           
        </div>   
        
        <div class="tagline text-center" >
            <h1><?php the_field('titulo_principal') ?></h1>
            <p><?php the_field('contenido_principal') ?></p>
        </div>

    </div>
</header>