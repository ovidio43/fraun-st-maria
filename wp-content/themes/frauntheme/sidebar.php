<?php
$id_image = get_field('image_rigth');
$image = wp_get_attachment_image_src($id_image,'full');
?>
<div class="inner-sidebar">
    <h1><?php echo get_field('sub_title') ?></h1>
    <img src="<?php echo $image[0]; ?>"  >   
    <?php echo get_field('content_rigth') ?>
</div>
