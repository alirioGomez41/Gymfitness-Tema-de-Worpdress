
<?php 
/*
Template Name: Galería 
*/
get_header( );
?>

<main class="contenedor pagina seccion">

    <?php while(have_posts(  )):the_post(  );?>
        <h1 class="text-center texto-primario"><?php the_title() ?></h1>
        
        <?php 
            $galeria = get_post_gallery(get_the_ID(),false );
       
            $galeria_id = explode(',',$galeria['ids']);
        
        ?>

        <ul class="galeria-imagenes">
            <?php 
                $i = 1;
                foreach($galeria_id as $id)
                {
                    if($i == 4 || $i == 6)
                    {
                        $size = 'portrait';
                    }
                    else
                    {
                        $size = 'square';
                    }

                    $imagen_pequena = wp_get_attachment_image_src($id, $size);
                    $imagen_grande = wp_get_attachment_image_src($id, 'blog');
                  
                ?>

                    <li>
                        <a href="<?php echo $imagen_grande[0] ?>" data-lightbox="galeria">
                            <img src="<?php echo $imagen_pequena[0]?>" alt="imagen">
                        </a>
                    </li>


                <?php
                    $i++;
                }
            
            ?>
        </ul>
    <?php endwhile;?>

</main>

<?php get_footer() ?>