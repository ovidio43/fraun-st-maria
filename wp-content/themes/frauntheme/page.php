<?php get_header(); ?>
<section class="img-slide">
    <ul class="bxslider">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/foto_homeFG.jpeg" /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/foto_homeFG.jpeg" /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/foto_homeFG.jpeg" /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/foto_homeFG.jpeg" /></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/foto_homeFG.jpeg" /></a></li>        
    </ul>    
</section>
<section class="inner">
    <div class="inner-content">
        <?php
        while (have_posts()) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <?php
            the_content();
        endwhile;
        ?>
    </div>
    <?php get_sidebar(); ?>
</section>
<?php
get_footer();
