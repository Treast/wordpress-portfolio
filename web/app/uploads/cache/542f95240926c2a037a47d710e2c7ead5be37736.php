<picture class="responsive-image<?php echo e(isset($cover) && $cover ? ' responsive-image--cover' : ''); ?>">
    <img src="<?php echo e(wp_get_attachment_image_url($imageId, $size ? $size : 'medium' )); ?>"
        srcset="<?php echo e(wp_get_attachment_image_srcset($imageId, $size ? $size : 'medium' )); ?>"
        sizes="<?php echo e(wp_get_attachment_image_sizes($imageId, $size ? $size : 'medium' )); ?>" />
</picture>