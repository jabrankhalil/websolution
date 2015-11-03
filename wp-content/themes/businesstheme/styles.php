<style type="text/css">
header{
    <?php
    $header=get_field('image','options');
    $image=wp_get_attachment_image_src($header['ID'],'header');
    ?>
    background-image:url(<?php echo $image[0];?>)!important;
}

</style>
