<?php
//print_r(json_encode(get_field('_image_gallery')));
$image = wp_get_attachment_image_src($id_image, 'full');
?>
<div class="inner-sidebar">
    <h1><?php echo get_field('sub_title') ?></h1>
    <ul>
        <?php
        foreach (get_field('_image_gallery') as $row) {
            ?>
            <li>
                <a  href="<?php echo $row['url']; ?>" class="img-in-f"><img src="<?php echo $row['url']; ?>"  >
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
    <?php // echo get_field('content_rigth') ?>
</div>
<?php
//[{
//"id":29,
// "alt":"",
// "title":"foto",
// "caption":"",
// "description":"",
// "url":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/foto.jpg",
// "width":320,
// "height":180,
// "sizes":{
//"thumbnail":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/foto-150x150.jpg",
// "thumbnail-width":150,
// "thumbnail-height":150,
// "medium":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/foto-300x168.jpg",
// "medium-width":300,
// "medium-height":168,
// "large":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/foto.jpg",
// "large-width":320, "large-height":180
//}
//},
// {"id":32, "alt":"", "title":"nodejs-1280x1024", "caption":"", "description":"", "url":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/nodejs-1280x1024.png", "width":1280, "height":1024, "sizes":{"thumbnail":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/nodejs-1280x1024-150x150.png", "thumbnail-width":150, "thumbnail-height":150, "medium":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/nodejs-1280x1024-300x240.png", "medium-width":300, "medium-height":240, "large":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/nodejs-1280x1024-1024x819.png", "large-width":1024, "large-height":819}}, {"id":33, "alt":"", "title":"Koala", "caption":"", "description":"", "url":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/Koala.jpg", "width":1024, "height":768, "sizes":{"thumbnail":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/Koala-150x150.jpg", "thumbnail-width":150, "thumbnail-height":150, "medium":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/Koala-300x225.jpg", "medium-width":300, "medium-height":225, "large":"http:\/\/local.fraun-st-maria.com\/wp-content\/uploads\/2014\/08\/Koala.jpg", "large-width":1024, "large-height":768}}]