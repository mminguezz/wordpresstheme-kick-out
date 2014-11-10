<?php
// Add new image sizes
add_image_size( 'new-size', 100, 200, true );


function kickout_more_image_sizes($sizes) {
    $addsizes = array(
        "new-size" => __("Size news", 'TEXT_DOMAIN'),
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}

add_filter('image_size_names_choose', 'kickout_more_image_sizes');


?>