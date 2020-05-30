<?php
/*
Template Name: Nuestras Clases
*/

get_header( );
?> 



<main class="contenedor pagina seccion no-sidebar text-center">
  <div>
      <?php get_template_part('template-parts/paginas') ?>
      <?php gymfitness_lista_clases() ?>
  </div>
</main>








<?php get_footer() ?>