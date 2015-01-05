<?php 
/*
* Template name: home
*/
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="img-slide">
        <?php echo get_the_post_thumbnail( get_the_ID(), 'full'); ?>
    </section>
    <section class="inner">  
        <div class="inner-content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div class="inner-sidebar">
            <h2><?php the_field('title_about');?></h2>
            <?php
            $image = $row['image_about'];
            $size = 'full';
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>            
            <img src="<?php echo get_template_directory_uri(); ?>/images/foto.jpg" width="324" >
            <?php echo get_field('content_about');?>
            <a class="download-file" href="<?php the_field('program_pdf_file');?>" target="_blank">Download Program File <i class="pdf-icon"></i></a>           
        </div>
    </section>
<?php endwhile; ?>
<?php
get_footer();
