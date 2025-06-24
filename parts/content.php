<article>
    <h2><a href="<?php the_permalink();?>"><?php the title();?></a></h2>
    <?php if(has_post_thumbnail());?>
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(275,275));?></a>
    <?php endif;?>
    <div class="meta-info">
        <p>Categories:<?php the_category(' ');?></p>
        <?php if(has_tag()):?>
            <p>Tags:<?php the_tags('',',');?></p>
            <?php endif;?>
        </div>
        <?php the_excerpt();?>
</article>