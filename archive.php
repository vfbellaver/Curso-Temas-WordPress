<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
     width="<?php echo get_custom_header()->width; ?>" alt=""/>

<div class="conteudo">
    <main>
        <section class="meio">
            <div class="container">
                <div class="row">

                    <div class="archive col-md-9">
                        <?php
                        // Se houver algum post
                        the_archive_title('<h1 class="titulo-arquivos">','</h1>');
                        the_archive_description();
                        if (have_posts()) :
                            // Enquanto houver algum post, chame o post de determinada maneira
                            while (have_posts()) :
                                the_post();
                                ?>

                                <?php get_template_part('content', 'archive'); ?>

                                <?php
                            endwhile;
                            ?>
                            <div class="row">
                                <div class="paginacao text-left col-md-6">
                                    <?php next_posts_link("<< Anteriores") ?>
                                </div>
                                <div class="paginacao text-right col-md-6">
                                    <?php previous_posts_link("Mais novos >>") ?>
                                </div>
                            </div>
                            <?php
                        else:
                            ?>
                            <p>Nao tem nada ainda pra mostrar</p>
                            <?php
                        endif;
                        ?>

                    </div>
                    <aside class="barra-lateral col-md-3">
                        <?php get_sidebar('blog'); ?>
                    </aside>
                </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
