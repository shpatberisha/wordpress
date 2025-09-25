<?php get_header();?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="page-item">
                <?php
                while (have_post()): the_post();
                get_template_part('parts/content','page');

                if(coments_open() || get_coments_number()){
                    coments_template();
                }
            endwhile;
            ?>
            </div>
        </div>
   </main>

 </div>

</div>

        <?php get_footer();?>