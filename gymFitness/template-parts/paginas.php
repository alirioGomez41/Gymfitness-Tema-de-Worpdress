<div class="contenido-principal">
        <?php while(have_posts(  )):the_post(  );?>
        
            <h1 class="text-center texto-primario"><?php the_title() ?></h1>
            <?php the_post_thumbnail('mediano', array('class'=> 'imagen-destacada')) ?>

            <?php 
                if(get_post_type() === 'gymfitness_clases')
                {
            ?>           
                <?php 
                $hora_inicio = get_field('hora_de_inicio');
                $hora_fin = get_field('hora_de_fin');

                ?>
                <p class="informacion-clase"><?php the_field('dias_clase') ?> - <?php echo $hora_inicio . ' a ' . $hora_fin  ?></p>
            <?php
                }          
            ?>

            <p class="texto-contenido"><?php the_content() ?></p>

        <?php endwhile;?>
</div>