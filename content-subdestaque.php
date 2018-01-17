<article class="noticia-destaque">
    <div class="miniatura-subdestaque">
        <a title="<?php the_title_attribute()?>" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
        </a>
    </div>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h1>
    <p>por <span><?php  the_author_posts_link() ?></span></p>
    <p><?php the_excerpt(); ?></p>
</article>