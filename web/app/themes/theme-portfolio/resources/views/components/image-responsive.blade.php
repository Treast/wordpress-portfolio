<picture class="responsive-image{{ isset($cover) && $cover ? ' responsive-image--cover' : '' }}">
    <img src="{{ wp_get_attachment_image_url($imageId, $size ? $size : 'medium' ) }}"
        srcset="{{ wp_get_attachment_image_srcset($imageId, $size ? $size : 'medium' ) }}"
        sizes="{{ wp_get_attachment_image_sizes($imageId, $size ? $size : 'medium' ) }}" />
</picture>