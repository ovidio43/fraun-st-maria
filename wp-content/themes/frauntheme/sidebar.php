<?php
//print_r(json_encode(get_field('_image_gallery')));
$image = wp_get_attachment_image_src($id_image, 'full');
$imagethumb = wp_get_attachment_image_src($id_image, 'thumbnail');
?>
<div class="inner-sidebar">
    <h2><?php echo get_field('title_gallery') ?></h2>
    <?php 
    $images = get_field('image_gallery');
    if( $images ): ?>
        <ul class="gallery-images">
            <?php foreach( $images as $image ): ?>
            <li>
                <a  href="<?php echo $image['url']; ?>" class="img-in-f"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" >
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?> 
            <?php if(get_field('program-files_1')){?>
            <a class="download-file" href="<?php the_field('program-files_1');?>" target="_blank"><?php the_field('file_name_program1');?><i class="pdf-icon"></i></a>
            <?php }if(get_field('program-files_2')){?>
            <hr>
            <a class="download-file" href="<?php the_field('programm_file_2');?>" target="_blank"><?php the_field('file_name_program2');?> <i class="pdf-icon"></i></a>   
            <?php }?>       
    <?php // echo get_field('content_rigth') ?>
</div>
