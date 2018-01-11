<article class="noticia-destaque">
    <div class="miniatura-destaque">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
        </a>
    </div>

    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h1>
    <p> por <span><?php the_author_posts_link(); ?></span> em <span><?php the_category(' '); ?></span>
        <?php the_tags('Tags: ', ', ') ?></p>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
</article>