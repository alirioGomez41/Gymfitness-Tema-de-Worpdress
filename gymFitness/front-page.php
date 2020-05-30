<?php get_header('front') ?>


<section class="bienvenida seccion text-center">
    <h2 class="texto-primario"><?php the_field('titulo_bienvenida') ?></h2>
    <p><?php the_field('contenido_bienvenida') ?></p>
</section>

<div class="seccion-areas">
    <ul class="contenedor-areas">
        <?php
            $area1 = get_field('area_1');
            $area2 = get_field('area_2');
            $area3 = get_field('area_3');
            $area4 = get_field('area_4');
        
        ?>

        <li class="area">
            <?php $imagen = wp_get_attachment_image_src($area1['imagen_area'], 'mediano'); ?>


            <img src="<?php echo esc_html( $imagen[0])?>" alt="imagen">
            <p><?php echo esc_html( $area1['titulo_area'] ) ?></p>
        </li>
        
        <li class="area">
            <?php $imagen = wp_get_attachment_image_src($area2['imagen_area'], 'mediano'); ?>


            <img src="<?php echo esc_html( $imagen[0])?>" alt="imagen">
            <p><?php echo esc_html( $area2['titulo_area'] ) ?></p>
        </li>
        
        <li class="area">
            <?php $imagen = wp_get_attachment_image_src($area3['imagen_area'], 'mediano'); ?>


            <img src="<?php echo esc_html( $imagen[0])?>" alt="imagen">
            <p><?php echo esc_html( $area3['titulo_area'] ) ?></p>
        </li>
        
        <li class="area">
            <?php $imagen = wp_get_attachment_image_src($area4['imagen_area'], 'mediano'); ?>


            <img src="<?php echo esc_html( $imagen[0])?>" alt="imagen">
            <p><?php echo esc_html( $area4['titulo_area'] ) ?></p>
        </li>
        

    </ul>
</div>


<section class="clases">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Nuestras Clases</h2>
        <?php gymfitness_lista_clases(4) ?>

        <div class="contenedor-boton">
            <a href="<?php esc_html( the_permalink(get_page_by_title('Nuestras Clases'))) ?>" class="boton boton-primario">
                Ver toda las clases
            </a>
        </div>
    </div>
</section>


<section class="testimoniales">
    <h2 class="text-center texto-blanco">Testimoniales</h2>
    <div class="contenedor-testimoniales">
        <ul class="listado-testimoniales">
            <?php 
                $args = array('post_type'=> 'testimoniales', 'post_per_page' => 10);


                $the_query = new WP_Query($args);
                while($the_query->have_posts()):$the_query->the_post();

            ?>

            <li class="testimonial text-center "> 
                <blockquote>
                    <?php the_content() ?>
                </blockquote>
                <footer class="testimonial-footer">
                    <?php the_post_thumbnail('thumbnail') ?>
                    <p><?php the_title() ?></p>
                </footer>
            </li>

            <?php
                endwhile;

                wp_reset_postdata();
            ?>

        </ul>
    </div>
</section>

<section class="blog contenedor seccion">
            
    <h2 class="text-center texto-primario">Nuestro Blog</h2>
    <p class="text-center">Aprende tips de nuestros instructores expertos</p>
    
    <ul class="listado-blog">
            
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4
            );

            $blog = new WP_Query($args);

            while($blog->have_posts()):$blog->the_post();  ?>
                <?php get_template_part('template-parts/loop','blog');  ?>
            <?php endwhile; wp_reset_postdata(); ?>
        
    </ul>
</section>


<?php get_footer() ?>