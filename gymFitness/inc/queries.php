<?php

function gymfitness_lista_clases($cantidad = -1)
{
?>
    <ul class="lista-clases">
    <?php   
        $args = array('post_type' =>'gymfitness_clases','posts_per_page' =>$cantidad);
        $the_query = new WP_Query( $args );     
        while ( $the_query->have_posts() ) :$the_query->the_post();
    ?>

    <li class="clase card gradient"> 
        <?php the_post_thumbnail('mediano') ?>
        <div class="contenido">
            <a href="<?php the_permalink()?>"><h3><?php the_title() ?></h3></a>


            <?php 
            $hora_inicio = get_field('hora_de_inicio');
            $hora_fin = get_field('hora_de_fin');

            ?>
            <p><?php the_field('dias_clase') ?> - <?php echo $hora_inicio . ' a ' . $hora_fin  ?></p>
        </div>
    </li>


    <?php         
            endwhile;     
        wp_reset_postdata();
    ?>
    </ul>

<?php
}
