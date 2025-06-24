<?php get_header();?>
<div id="container">
    <div id="inner_container">
        <div class="imgs_container">
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/1.jpg" >
            </div>

            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/2.jpg" >
            </div>

            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/3.jpg" >
            </div>

        </div>
        <div id="overlay">
          <div id="left_button" class="overlay_button" onclick="onLeftButton()"></div>
          <div id="right_button" class="overlay_button" onclick="onrightButton()"></div>

    </div>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="content" clas="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="hero">
        hero
</section>
<section class="services">
  <h3>Services</h2>
  <div class="contaioner">
     <div class="services-item">
        <?php
           if(is_active_sidebar('services-1')){
            dynamic_sidebar('services-1');
           }
        ?>
        </div>
        <div class="services-item">
        <?php
           if(is_active_sidebar('services-2')){
            dynamic_sidebar('services-2');
           }
        ?>
          </div>
        <div class="services-item">
        <?php
           if(is_active_sidebar('services-3')){
            dynamic_sidebar('services-3');
           }
        ?>
          </div>

     </div>
  </div>
</section>
<section class="home-blog">
  <h2>Latest News</h2>
  <div class="container">
    <?php
    $args=array(
      'post_type'=>'post',
      'post_per_page'=>5,
      'category_in'=>array(9,10,15),
      'category_not_in'=>array(1)

    );

    $postlist=new WP_Querry($args);

    if($postlist->have_posts());
       while($postlist->have_posts()):$postlist->the_Post();
       get_template_part('parts/content','latest-news');
  endwhile;
  wp_reset_postdata();
else:
    ?>

</section>
</main>
</div>

</div>
<?php get_footer();?>