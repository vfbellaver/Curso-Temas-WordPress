<article class="noticia-destaque">
    <div class="miniatura-subdestaque">
        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
</article>