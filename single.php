<?php  get_header()?>
    <div id="primary">
        <main id="main">
            <div class="container">
                <?php

                    while (have_posts()) : the_post();
                        get_template_part('content','single');

                        if(comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                    endwhile;
                ?>
            </div>
        </main>
    </div>
<?php   get_footer()?>
