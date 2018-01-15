<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?>>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h1>
    <?php the_post_thumbnail(array(175, 175)); ?>
    <p> Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
    <p>Categorias: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', ') ?></p>
    <p><?php the_content(); ?></p>
</article>