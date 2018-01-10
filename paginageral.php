<?php
/*
    Template Name: Páginas Gerais
*/
?>

<?php get_header(); ?>
<div class="conteudo-wrapper container">
    <main>
        <div class="conteudo">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <p> Autor: <?php the_author(); ?></p>
                    <p><?php the_content(); ?></p>
                    <?php
                endwhile;
            else:
                ?>
                <p>Não tem nada para mostrar</p>
                <?php
            endif;
            ?>
        </div>

    </main>
</div>
<?php get_footer(); ?>



