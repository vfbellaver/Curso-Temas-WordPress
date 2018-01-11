<?php  get_header()?>
    <div id="primary">
        <main id="main">
            <div class="container">
                <?php

                    while (have_posts()) : the_post();
                        get_template_part('content','single');
                    endwhile;
                ?>
            </div>
        </main>
    </div>
<?php   get_footer()?>
