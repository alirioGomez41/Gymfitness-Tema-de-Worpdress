<?php get_header() ?>

    <main class="pagina seccion no-sidebars contenedor">

        <h3 class="text-center texto-primario">
            Autor: 
            <?php 
                $author = get_queried_object();
                echo $author->data->display_name;
            ?>
        </h3>
        
        <ul class="listado-blog">
           
           <?php get_template_part('template-parts/loop','blog'); ?>
        </ul>
    </main>

<?php get_footer() ?>