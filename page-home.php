<?php get_header(); ?>
    <div class="conteudo">
        <main>
            <section class="slide">
                <div class="container">Slide</div>
            </section>
            <section class="servicos">
                <div class="container">Serviços</div>
            </section>
            <section class="meio">
                <div class="container">
                    <div class="row">
                        <aside class="barra-lateral col-md-3">
                            <?php get_sidebar('home'); ?>
                        </aside>
                        <div class="noticias col-md-9">
                            <div class="row">
                                <?php
                                $tamanho = 'col-md-12';
                                $op_content = 'destaque';
                                $itens = get_categories(array('include' => '4,6,23'));

                                //                                    echo '<pre>';
                                //                                        print_r($itens);
                                //                                    echo  '</pre>';
                                foreach ($itens as $item) :
                                    $args = array(
                                        'category__in' => $item->cat_ID,
                                        'posts_per_page' => 1,
                                    );

                                    $consulta = new WP_Query($args);

                                    if ($consulta->have_posts()) :
                                        while ($consulta->have_posts()) :
                                            $consulta->the_post();
                                            ?>
                                            <div class="<?php echo $tamanho ?>">
                                                <?php get_template_part('content', $op_content); ?>
                                            </div>
                                            <?php
                                            $tamanho = 'col-md-6';
                                            $op_content = 'subdestaque';
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mapa">
                <div class="container">Mapa</div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>